<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{
    public function passwordPage()
    {
        return view('back.user.security.password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|confirmed'
        ]);

        $user = User::find(auth('user')->user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            session()->flash('error', 'Invalid current password supplied.');
            return back()->withInput();
        }

        if (Hash::check($request->password, $user->password)) {
            session()->flash('error', 'New password cannot be the same as current password.');
            return back()->withInput();
        }

        $user->update(['password' => $request->password]);

        session()->flash('success', 'Changed Password Successfully');
        return back();
    }


    public function pinPage()
    {
        return view('back.user.security.pin');
    }

    public function changePin(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
            'pin' => 'required|digits:4|confirmed'
        ]);

        $user = User::find(auth('user')->user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            session()->flash('error', 'Incorrect account password');
            return back()->withInput();
        }

        if (Hash::check($request->password, $user->password)) {
            session()->flash('error', 'New password cannot be the same as current password.');
            return back()->withInput();
        }

        $user->update(['pin' => $request->pin]);

        session()->flash('success', 'Changed Password Successfully');
        return back();
    }

    public function twoFactorPage()
    {
        $user = User::find(auth('user')->user()->id);
        $question = $user->questions;
        // dd($question[0]->question);
        return view('back.user.security.two-factor', compact('question'));
    }

    public function updateTwoFactor(Request $request)
    {
        $request->validate([
            'two_factor' => 'required|in:active,inactive',
            'question_one' => 'required|string',
            'question_two' => 'required|string',
            'question_three' => 'required|string',
            'answer_one' => 'required|string',
            'answer_two' => 'required|string',
            'answer_three' => 'required|string',
        ]);

        $data[] = ['question' => $request->question_one, 'answer' => $request->answer_one];
        $data[] = ['question' => $request->question_two, 'answer' => $request->answer_two];
        $data[] = ['question' => $request->question_three, 'answer' => $request->answer_three];

        $user = User::find(auth('user')->user()->id);
        $user->update(['two_factor' => $request->two_factor]);
        if ($user->questions()->count()) $user->questions()->delete();
        $user->questions()->createMany($data);
        session()->flash('success', 'Security question updated');
        return back();
    }
}
