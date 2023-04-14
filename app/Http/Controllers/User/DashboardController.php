<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = User::find(auth()->user()->id)->transactions()->where('type', 'transfer')->latest()->take(5)->get();
        return view('back.user.index', compact('transactions'));
    }

    public function statement()
    {
        $transactions = User::find(auth()->user()->id)->transactions()->latest()->paginate();
        return view('back.user.statement', compact('transactions'));
    }
}
