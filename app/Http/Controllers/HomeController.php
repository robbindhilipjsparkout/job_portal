<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mainjob()
    {
        return view('layouts.mainjob');
    }
    public function jobdashboard()
    {
        return view('layouts.jobdashboard');

    }
    public function admindashboard()
    {
        return view('admin-portal.admin-dashboard');

    }
    
    
}

