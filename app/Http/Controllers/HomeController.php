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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function consultation()
    {
        return view('vetconsultation');
    }

    public function petshop()
    {
        return view('petshop');
    }

    public function about()
    {
        return view('about');
    }
}
