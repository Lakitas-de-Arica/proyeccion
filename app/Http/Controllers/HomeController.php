<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $sponsorshipLogos = [
        'lak__1.svg',
        'lak__2.svg',
        'lak__3.svg',
        'lak__4.svg',
        'lak__5.svg',
        'lak__6.svg',
    ];

    public function index()
    {
        return view('home')
                ->with('logos', $this->sponsorshipLogos);
    }

    public function project()
    {
        return view('project');
    }

    public function story()
    {
        return view('story');
    }

    public function music()
    {
        return view('music');
    }

    public function members()
    {
        return redirect()->route('home');
        return view('members');
    }

    public function galleries()
    {
        return redirect()->route('home');
        return view('galleries');
    }

    public function credits()
    {
        return view('credits')
                ->with('logos', $this->sponsorshipLogos);
    }

    public function contact()
    {
        return redirect()->route('home');
        return view('contact');
    }

}
