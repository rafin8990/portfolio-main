<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectDetailsController extends Controller
{
    public function projectdetails(Request $request,$id)
    {
        $path = public_path('data/project.json');
        if (!File::exists($path)) {
            abort(404, 'File not found');
        }
        $json = File::get($path);
        $projects = json_decode($json, true);
        $project = collect($projects)->firstWhere('id', $id);
        return view('pages.projectDetails',compact('project'));
    }
}
