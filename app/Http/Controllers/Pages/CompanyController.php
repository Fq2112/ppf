<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    public function index()
    {
        \App\Models\Visitor::hit();
        return view('pages.company.home-company');
    }

    public function aboutUs()
    {
        \App\Models\Visitor::hit();
        return view('pages.company.about-us');
    }

    public function wrappingTools()
    {
        \App\Models\Visitor::hit();
        return view('pages.company.automotive.wrapping-tools');
    }

    public function showContact()
    {
        \App\Models\Visitor::hit();
        return view('pages.company.contact-company');
    }

    public function submitContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'string|min:3',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
        );

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to(env('MAIL_USERNAME'));
            $message->subject($data['subject']);
        });

        return back()->with('contact', 'Thank you for dropping us a line! Because every single comment or critics that you gave, will make us be a better company.');
    }
}
