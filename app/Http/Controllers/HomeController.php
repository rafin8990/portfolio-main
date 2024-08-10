<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class HomeController extends Controller
{
    public function home()
    {
        $path = public_path('data/review.json');
        $path2 = public_path('data/project.json');

        // Check if the file exists
        if (!File::exists($path)) {
            abort(404, 'File not found');
        }

        // Get the contents of the file
        $json = File::get($path);
        $jsons = File::get($path2);

        // Decode the JSON data
        $data = json_decode($json, true);
        $projects = json_decode($jsons, true);
        return view('pages.home', compact('data', 'projects'));
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

    public function download()
    {
        $filePath = public_path('resume.pdf');
        $fileName = 'resume.pdf';

        return response()->download($filePath, $fileName);
    }
}
