<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function home()
    {
        $path = public_path('data/review.json');

        // Check if the file exists
        if (!File::exists($path)) {
            abort(404, 'File not found');
        }

        // Get the contents of the file
        $json = File::get($path);

        // Decode the JSON data
        $data = json_decode($json, true);
        return view('pages.home', compact('data'));
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
