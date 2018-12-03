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

    public function shopdetail($id)
    {
        return view('shop-detail',compact('id'));
    }

    public function shopcheckout($id)
    {
        return view('shop-checkout',compact('id'));
    }
	
    public function shopchart()
    {
        return view('shop-chart');
    }

    public function vets()
    {
        return view('vet-consultation');
    }

    public function appointment()
    {   
        return view('appointment');
    }
    public function petcare()
    {
        return view('petcare-index');
    }

    public function petcaredetail()
    {
        return view('petcare-detail');
    }
    
    public function petcarecheckout($id)
    {
        //dd($id);
        return view('petcare-checkout', compact('id'));

    }
    
    public function ceckhoutfinish()
    {
        return view('petcare-finish');
    }
    public function petcarechart()
    {
        return view('petcare-chart');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function signin()
    {
        return view('sign-in');
    }
    
    public function chat()
    {
        return view('chat');
    }

    public function success()
    {
        return view('success');
    }
}
