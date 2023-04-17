<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::find(1);
        return view('back.admin.settings.contact', compact('contact'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $valid = $request->validate([
            'notification_email' => 'required|email',
            'support_email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|string',
        ]);

        $contact = Contact::find(1);
        if(is_null($contact))
        {
            Contact::create($valid);
        }else{
            $contact->update($valid);
        }
        session()->flash('success','Updated contact details');
        return redirect()->route('admin.settings.contact.index');
    }

}
