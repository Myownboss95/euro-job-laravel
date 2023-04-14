<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable as ActionsRedirectIfTwoFactorAuthenticatable;

class RedirectIfTwoFactorAuthenticatable extends ActionsRedirectIfTwoFactorAuthenticatable
{
   /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $next
     * @return mixed
     */
    public function handle($request, $next)
    {
        $user = $this->validateCredentials($request);

        if (optional($user)->two_factor == 'active' && count($user->questions->all()) &&
            in_array(TwoFactorAuthenticatable::class, class_uses_recursive($user))) {
            return $this->twoFactorChallengeResponse($request, $user);
        }

        return $next($request);
    }
}
