<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function ShowHome()
    {
        $data['products'] = Product::select(['id', 'slug', 'name', 'price' ])->
        paginate(6);

      return  view('frontend.home', $data);
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
