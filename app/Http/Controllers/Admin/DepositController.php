<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('back.admin.deposit', compact('users'));
    }

    public function deposit(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,success,failed',
            'date' => 'nullable|date'
        ]);

        $user = User::findOrFail($request->user);
        $user->transactions()->create(array_merge(
            [
                'reference' => Str::random(10),
                'amount' => $request->amount,
                'description' => $request->description,
                'type' => 'deposit',
                'status' => $request->input('status'),
            ],
            $request->filled('date') ? ['created_at' => $request->input('date')] : []
        ));
        if ($request->input('status') != 'failed') {
            $balance = $request->input('status') == 'pending' ? 'pending_balance' : 'balance';
            $user->{$balance} += $request->amount;
            $user->save();
        }
        session()->flash('success', 'Deposited Successfully');
        return back();
    }
    public function withdraw_view()
    {
        $users = User::all();
        return view('back.admin.withdraw', compact('users'));
    }
    public function withdraw(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,success,failed',
            'date' => 'nullable|date'
        ]);

        $user = User::findOrFail($request->user);
        $user->transactions()->create(array_merge(
            [
                'reference' => Str::random(10),
                'amount' => $request->amount,
                'description' => $request->description,
                'type' => 'withdrawal',
                'status' => $request->input('status'),
            ],
            $request->filled('date') ? ['created_at' => $request->input('date')] : []
        ));
        if ($request->input('status') != 'failed') {
            $balance = $request->input('status') == 'pending' ? 'pending_balance' : 'balance';
            if($user->{$balance} == 0 || $request->amount > $user->{$balance}  ){
                session()->flash('error', 'Amount is greater than current balance');
                return back()->withInput();
            }
            $user->{$balance} -= $request->amount;
            $user->save();
        }
        session()->flash('success', 'Withdrawn Successfully');
        return back();
    }
}
