<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ShowHome()
    {
      return  view('frontend.home');
    }

    public function CategoryByProduct($slug)
    {
        $data = [];
        $data['slug'] = $slug;

       return view('frontend.category', $data);
    }

    public function ShowDashboard()
    {
        return view('frontend.dashboard');
    }



}
