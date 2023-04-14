<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(auth('user')->user()->id);
        $transactions = $user->transactions()->latest()->paginate();
        return view('back.user.profile.index', compact('user', 'transactions'));
    }

    public function update(Request $request)
    {
        $valid = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'middlename' => 'required|string',
            'email' => 'required|email',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zip_code' => 'required|string',
            'image' => 'sometimes|mimes:jpg,jpeg,png'
        ]);

        $user = User::find(auth('user')->user()->id);
        if ($request->hasFile('image')) {
            $valid['image'] = str_replace(' ', '', rand() . now()->toDateTimeString() . '.' . $request->file('image')->extension());
            $request->file('image')->move(public_path(config('dir.profile')), $valid['image']);
            if (!is_null($user->image)) {
                unlink(public_path(config('dir.profile') . $user->image));
            }
        }
        $user->update($valid);
        session()->flash('success', 'Updated profile successfully');
        return back();
    }
}
