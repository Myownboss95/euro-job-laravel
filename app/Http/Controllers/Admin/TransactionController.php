<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $transactions = Transaction::latest()->get();
        return view('back.admin.transactions.index', compact('transactions'));
    }

    public function changeDate(Request $request)
    {
        // $date = Carbon::parse($request->date)->toDateTime();
        // $date = str_replace('-','/',$request->date);

        // $date = Carbon::parse($request->input('date'))->format('Y-d-M H:m:i');
        $date = Carbon::parse($request->input('date'));
        $models = Transaction::whereIn('id', array_values($request->transactions));
        $models->update(['created_at' => $request->input('date')]);
        return response()->json(['message' => "Transaction(s) back dated successfully"]);
    }
}
