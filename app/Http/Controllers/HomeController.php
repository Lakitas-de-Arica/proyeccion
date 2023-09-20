<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sponsorshipLogos = [
            'lak__1.svg',
            'lak__2.svg',
            'lak__3.svg',
            'lak__4.svg',
            'lak__5.svg',
            'lak__6.svg',
        ];

        return view('home')
                ->with('logos', $sponsorshipLogos);
    }

    public function project()
    {
        return redirect()->route('home');
        return view('project');
    }

    public function story()
    {
        return redirect()->route('home');
        return view('story');
    }

    public function music()
    {
        return redirect()->route('home');
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
        return redirect()->route('home');
        return view('credits');
    }

    public function contact()
    {
        return redirect()->route('home');
        return view('contact');
    }

}
