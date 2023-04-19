<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\OnBoardMailable;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ActivationController extends Controller
{
    public function index()
    {
        return view('back.user.activation.index');
    }
    public function activate(Request $request)
    {
        $valid = $request->validate([
            'middlename' => 'sometimes|nullable|string',
            'dob' => 'required|string',
            'account_type' => 'required|in:' . implode(',', config('constants.account_types')),
            'phone' => 'required|regex:/^[+][0-9]{9,14}/',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zip_code' => 'required|string',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $valid['image'] = str_replace(' ', '', rand() . now()->toDateTimeString() . '.' . $valid['image']->extension());
        $request->file('image')->move(public_path(config('dir.profile')), $valid['image']);
        $valid['dob'] = Carbon::createFromFormat('d-M-Y', $valid['dob']);
        $valid['account_number'] = generateAccountNumber();

        dd($valid);
        $user = User::find(auth('user')->user()->id);
        $user->update($valid);
        
        dd($user);
        Mail::to($user)->send(new OnBoardMailable($valid['account_number']));
        session()->flash('success','Your bank account has been created successfully');
        return redirect()->route('user.index');
    }
}
