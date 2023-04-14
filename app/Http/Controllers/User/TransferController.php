<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Helpers\OtpHelper;
use App\Helpers\SmsHelper;
use Illuminate\Http\Request;
use App\Mail\SendTokenMailable;
use App\Http\Controllers\Controller;
use App\Mail\ReceivedTransferMailable;
use App\Mail\SendAccountStatusMailable;
use App\Mail\TransferDetailsMailable;
use Illuminate\Support\Facades\Mail;

class TransferController extends Controller
{
    public function localPage()
    {
        return view('back.user.transfer.local');
    }

    public function localDetails(Request $request)
    {
        $user = User::where('account_type', $request->account_type)->where('account_number', $request->account_number)->first();
        if (is_null($user)) return response('', 404);
        return response()->json(['name' => $user->name, 'same' => $user->id == auth('user')->user()->id]);
    }

    public function interBankPage()
    {
        return view('back.user.transfer.inter-bank');
    }

    public function processTransfer(Request $request)
    {
        $rules = [
            'account_number' => 'required|numeric',
            'account_type' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'sometimes|nullable|string'
        ];
        $request->validate($rules);
        $user = User::find(auth('user')->user()->id);

        if ($user->status != 'active') {

            $message = "Your account is currently ".ucfirst($user->status).". Contact support.";
            (new SmsHelper)->send($user->phone, $message);
            Mail::to($user)->send(new SendAccountStatusMailable($user));
            session()->flash('error', $message);
            return back()->withInput();
        }
        if ($user->limit != 4) {
            $limits = config('constants.limits');
            if ($request->amount > $limits[$user->limit]) {
                $limit = '$' . number_format($limits[$user->limit]);
                session()->flash('error', "You have exceeded your instant transfer limit, your instant limit is {$limit}");
                return back()->withInput();
            }
        }

        if ($user->account_number == $request->account_number) {
            session()->flash('error', 'You cannot transfer to yourself');
            return back()->withInput();
        }
        if ($user->balance < $request->amount) {
            session()->flash('error', 'Insufficient funds');
            return back()->withInput();
        }

        $otp = (new OtpHelper)->generate();
        $data = $request->only(['amount', 'description']);
        $data['reference'] = generateReference();
        $data['type'] = 'transfer';
        $data['meta']['account_number'] = $request->account_number;
        $data['meta']['account_type'] = $request->account_type;
        $data['meta']['transfer_type'] = 'inter.bank';
        if (User::where('account_type', $request->account_type)->where('account_number', $request->account_number)->count()) {
            $data['meta']['transfer_type'] = 'local';
            $data['meta']['recipient_name'] = $user->name;
        } else {
            $request->validate(array_merge($rules, [
                'swift_code' => 'sometimes|min:8|max:11',
                'iban' => 'required',
                'recipient_name' => 'required',
                'bank' => 'required|string',
                'routing_number' => 'sometimes|digits:9',
                'country' => 'required|string'

            ]));
            $data['meta']['swift_code'] = $request->swift_code;
            $data['meta']['iban'] = $request->iban;
            $data['meta']['recipient_name'] = $request->recipient_name;
            $data['meta']['bank'] = $request->bank;
            $data['meta']['routing_number'] = $request->routing_number;
            $data['meta']['transfer_type'] = 'inter.bank';
        }
        session()->put('key', $otp->key);
        session()->put('transferData', $data);
        $message = "Your otp is {$otp->token}";
        (new SmsHelper)->send($user->phone, $message);
        Mail::to($user)->send(new SendTokenMailable($otp->token));
        return redirect()->route('user.transfer.confirm.page');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'token' => 'required|numeric',
        ]);
        if (!session()->has('key') || !session()->has('transferData')) {
            session()->flash('error', 'Invalid Transfer Details');
            return back()->withInput();
        }
        $user = User::find(auth('user')->user()->id);
        $valid = (new OtpHelper)->verify(session()->pull('key'), $request->token);
        if ($valid === 'expired') {
            return back()->withInput()->withErrors(['token' => 'Token expired']);
        } else if ($valid === false) {
            return back()->withInput()->withErrors(['token' => 'Invalid Token supplied']);
        }

        $data = session()->pull('transferData');
        $user->transactions()->create($data);
        $user->balance -= $data['amount'];
        $user->save();

        $message = '$' . "{$data['amount']} was transfered from your account. Current Balance:{$user->balance}";
        (new SmsHelper)->send($user->phone, $message);
        Mail::to($user)->send(new TransferDetailsMailable($data, $user));

        $user = User::where('account_number', $data['meta']['account_number'])->first();
        if (!is_null($user)) {
            $message = '$' . "{$data['amount']} was transfered to your account. Current Balance:{$user->balance}";
            (new SmsHelper)->send($user->phone, $message);
            Mail::to($user)->send(new ReceivedTransferMailable($data, $user));
        }

        session()->flash('success', 'Transfer Successful');

        return redirect()->route('user.transfer.' . $data['meta']['transfer_type']);
    }

    public function tokenPage()
    {
        return view('back.user.transfer.token');
    }
}
