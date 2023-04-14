<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $deposits = Transaction::where('type', 'deposit')->latest()->get();
        $transfers = Transaction::where('type', 'transfer')->latest()->get();
        return view('back.admin.dashboard',compact('users','deposits','transfers'));
    }
}
