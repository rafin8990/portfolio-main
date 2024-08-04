<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function projectdetails(){
        return view('pages.projectDetails');
    }
}
