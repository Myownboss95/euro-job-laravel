<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewPasswordMailable;
use App\Mail\SendAccountDetailsMailable;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('back.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('back.admin.users.create');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'middlename' => 'sometimes|nullable|string',
            'gender' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|regex:/^[+][0-9]{9,14}/',
            'account_type' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zip_code' => 'required|string',
            'dob' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);

        $filename = rand() . now()->toDateTimeString() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path(config('dir.profile')), $filename);
        $request->file('image')->getFilename();
        $valid['image'] = $filename;

        $valid['password'] = Str::random(10);
        $valid['account_number'] = generateAccountNumber();

        $user = User::create($valid);
        Mail::to($user)->send(new SendAccountDetailsMailable($user,$valid['account_number'],$valid['password']));

        session()->flash('success', 'User Created successfully');

        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('back.admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'middlename' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email|unique:users,email,',
            'phone' => 'required|regex:/^[+][0-9]{9,14}/',
            'account_type' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zip_code' => 'required|string',
            'dob' => 'required|string',
            'image' => 'sometimes|nullable|mimes:jpg,jpeg,png',
        ]);
        // dd($valid);

        if ($request->hasFile('image')) {
            $filename = rand() . now()->toDateTimeString() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path(config('dir.profile')), $filename);
            $valid['image'] = $filename;
        }
        $valid['dob'] = Carbon::parse(str_replace('-','/',$valid['dob']));
        User::find($id)->update($valid);
        session()->flash('success', 'User updated successfully');
        return redirect()->route('admin.users.index');
    }

    public function limitPage($id)
    {
        $user = User::find($id);
        return view('back.admin.users.limit',compact('user'));
    }

    public function updateLimit(Request $request,$id)
    {
        $request->validate([
            'limit' => 'required|numeric'
        ]);
        $user = User::find($id);
        $user->update($request->all());
        session()->flash('success','Limit updated successfuly');
        return back();

    }

    public function changeStatus($id)
    {
        $user = User::findOrFail($id);
        if($user->status == 'active'){
            $status = 'inactive';
        }elseif($user->status == 'inactive'){
            $status = 'dormant';
        }elseif($user->status == 'dormant'){
            $status = 'freezed';
        }else{
            $status = 'active';
        }
        $user->status = $status;
        $user->save();
        session()->flash('success','Status changed successfully');
        return redirect()->route('admin.users.index');

    }

    public function updatePassword($id)
    {
        $user = User::find($id);
        $password = "defaultReset";
        $user->update(['password' => $password]);
        Mail::to($user)->send(new SendNewPasswordMailable($user,$password));
        session()->flash('success', "Password Reset successful");
        return back();
    }

    public function loginAs($id)
    {
        auth('user')->loginUsingId($id);
        return redirect()->to("//".user_domain());
    }

    public function delete($id)
    {
        $user = User::find($id);
        if($user->image) unlink(config('dir.profile').$user->image);
        $user->questions()->delete();
        $user->transactions()->delete();
        $user->delete();
        session()->flash('success','User deleted');
        return back();
    }
}
