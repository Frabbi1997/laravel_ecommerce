<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboaradController extends Controller
{
    public function ShowDashboard()
    {
        return view('backend.dashboard');
    }
}
