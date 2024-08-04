<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }


    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('rafin.hossain.8990@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
