<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function projects()
    {
        return view('project');
    }

    public function ourTeam()
    {
        return view('our_team');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function contactUs()
    {
        return view('contact_us');
    }
}
