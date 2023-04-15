<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        $contact = Contact::find(1);
        return view('front.contact',compact('contact'));
    }

    public function help()
    {
        return view('front.help');
    }
}
