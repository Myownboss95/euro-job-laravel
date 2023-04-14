<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SendEmailsMailable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('back.admin.emails.index', compact('users'));
    }

    public function send(Request $request)
    {
        $valid = $request->validate([
            'subject' => 'required',
            'recipients' => 'required',
            'message' => 'required',
            'attachments' => 'nullable|required',
            'attachments.*' => 'mimes:jpg,png,jpeg,pdf'
        ]);
        $attachData = [];
        DB::beginTransaction();
        try {
            if ($valid['attachments']) {
                foreach ($request->attachments as $attachment) {
                    $filename = rand() . now()->toDateTimeString() . '.' . $attachment->extension();
                    $dir = public_path(config('dir.attachments'));
                    $attachment->move($dir, $filename);
                    $attachData[] = $filename;
                }
            }
            $to = User::find($request->recipients);
            foreach ($to as $user) {

                Mail::to($user)->send(new SendEmailsMailable($user, $request->message, $request->subject, $attachData));
                // $mail = new Email([
                //     'subject' => $request->subject,
                //     'message' => $request->message,
                //     'attachments' => $attachData
                // ]);
                // $user->emails()->save($mail);
            }
            DB::commit();
            session()->flash('error', 'Failed to send emails');
            return redirect()->route('admin.emails.index');
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error($th->getMessage());
            session()->flash('error', 'Failed to send emails');
            foreach ($attachData as $data) {
                unlink(public_path(config('dir.attachments') . $data));
            }
            return redirect()->back()->withInput();
        }
    }
}
