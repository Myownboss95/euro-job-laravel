<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecurityController extends Controller
{
    public function securityPage()
    {
        return view('back.admin.settings.security');
    }

    public function securityUpdate(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'sometimes|nullable|string|confirmed'
        ]);
        $admin = Admin::find(auth('admin')->user()->id);

        $admin->update($valid);
        session()->flash('success','Updated Successfully');
        return redirect()->back();
    }
}
