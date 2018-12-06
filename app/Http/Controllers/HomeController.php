<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

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
	
    public function chart()
    {
        return view('chart');
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
    public function signup()
    {
        return view('sign-up');
    }

    public function about()
    {
        return view('about');
    }

    public function store(Request $request)
    {
        $daftar = new User;
            $daftar->name = $request->name;
            $daftar->email = $request->email;
            $daftar->no_telepon = $request->telepon;
            $daftar->password = md5($request->password);
            $daftar->tgl_lahir = $request->tgl_lahir;
            $daftar->alamat = $request->alamat;
            $daftar->save();
            return redirect('sign-in');    
    }

    public function addSession (Request $request) {
        return $request->session ()->has ('name');
    }

    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if(md5($request->password)==$user->password){
            //$request->session()->push('name', $user);
            Session::put('userSession', $user);
            return redirect('/index');
        }

    }

    public function logout(Request $request)
    {
        $request->session ()->forget ('userSession');

        return redirect('/index');
    }
}
