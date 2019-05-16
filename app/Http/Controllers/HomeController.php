<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ShowHome()
    {
      return  view('frontent.home');
    }

    public function CategoryByProduct($slug)
    {
        $data = [];
        $data['slug'] = $slug;

       return view('frontent.category', $data);
    }



}
