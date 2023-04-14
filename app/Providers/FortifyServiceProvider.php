<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Contracts\Auth\StatefulGuard;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController;
use App\Http\Controllers\AuthenticatedSessionController as ControllersAuthenticatedSessionController;
use App\Http\Middleware\RedirectIfTwoFactorAuthenticatable as MiddlewareRedirectIfTwoFactorAuthenticatable;
use App\Http\Controllers\TwoFactorAuthenticatedSessionController as ControllersTwoFactorAuthenticatedSessionController;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(AuthenticatedSessionController::class, ControllersAuthenticatedSessionController::class);
        $this->app->bind(TwoFactorAuthenticatedSessionController::class,ControllersTwoFactorAuthenticatedSessionController::class);
        $this->app->bind(RedirectIfTwoFactorAuthenticatable::class, MiddlewareRedirectIfTwoFactorAuthenticatable::class);
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView(function () {
            if (request()->isAdmin()) return view('back.admin.auth.login');
            return view('back.user.auth.login');
        });

        Fortify::registerView(function(){
            return view('back.user.auth.register');
        });

        Fortify::twoFactorChallengeView(function () {
            $model = app(StatefulGuard::class)->getProvider()->getModel();
            $user = $model::find(session()->get('login.id'));
            if(! $user) return redirect()->route('login');
            $questions = $user->questions()->get(['question','id'])->all();
            return view('back.user.auth.two-factor',compact('questions'));
        });

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
