<?php

namespace Edutras\Contact\Http\Controllers;

use Edutras\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Edutras\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to('navi@edutra.io')->send(new ContactMailable($request->message, $request->name, $request->email));
//        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name, $request->email));
        Contact::create($request->all());
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
