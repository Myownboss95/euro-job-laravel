<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Http\Requests\TwoFactorLoginRequest;
use Laravel\Fortify\Http\Responses\TwoFactorLoginResponse;
use Laravel\Fortify\Http\Responses\FailedTwoFactorLoginResponse;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController as Controller;

class TwoFactorAuthenticatedSessionController extends Controller
{

    /**
     * Attempt to authenticate a new session using the two factor authentication code.
     *
     * @param  \Laravel\Fortify\Http\Requests\TwoFactorLoginRequest  $request
     * @return mixed
     */
    public function store(TwoFactorLoginRequest $request)
    {
        $request->validate([
            'question' => 'required|numeric',
            'answer' => 'required|string'
        ]);
        $user = $request->challengedUser();
        $question = $user->questions->where('id',$request->question)->first();

        if (strtolower($question->answer) != strtolower($request->answer)) {
            return redirect()->route('login')->withErrors(['email' => "Incorrect answer provided for the security question"]);
            // $code = $request->validRecoveryCode()
            // $user->replaceRecoveryCode($code);

            // event(new RecoveryCodeReplaced($user, $code));
        }
        // elseif (! $request->hasValidCode()) {
        //     return app(FailedTwoFactorLoginResponse::class);
        // }

        $this->guard->login($user, $request->remember());

        $request->session()->regenerate();

        return app(TwoFactorLoginResponse::class);
    }

}
