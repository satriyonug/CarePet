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

    public function shop()
    {
        return view('shop');
    }

    public function shopdetail()
    {
        return view('shop-detail');
    }

    public function shopcheckout()
    {
        return view('shop-checkout');
    }

    public function shopchart()
    {
        return view('shop-chart');
    }

    public function vets()
    {
        return view('vet-consultation');
    }

    public function petcare()
    {
        return view('petcare-index');
    }

    public function petcaredetail()
    {
        return view('petcare-detail');
    }
}
