<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
      return  view('home');
    }

    public function About()
    {
        return view('about');
    }

    public function Rabbi()
    {
        return view ('rabbi');
    }
}
