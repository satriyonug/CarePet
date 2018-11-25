<?php

namespace App\Http\Controllers;

use App\SendPet;
use Illuminate\Http\Request;

class SendPetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->origins != "NULL" && $request->destinations != "NULL")
        {
            $sendpet = new SendPet;
            $sendpet->nama_pengirim = $request->name;
            $sendpet->telp_pengirim = $request->telp_pengirim;
            $sendpet->nama_penerima = $request->tujuan;
            $sendpet->telp_penerima = $request->telp_penerima;
            $sendpet->alamat_jemput = $request->origins;
            $sendpet->alamat_antar = $request->destinations;
            $sendpet->harga = $request->billing;
            $sendpet->catatan_pengirim = $request->text;
            $sendpet->save();
            //return dd($sendpet);
            return redirect('success');    
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SendPet  $sendPet
     * @return \Illuminate\Http\Response
     */
    public function show(SendPet $sendPet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SendPet  $sendPet
     * @return \Illuminate\Http\Response
     */
    public function edit(SendPet $sendPet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SendPet  $sendPet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendPet $sendPet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SendPet  $sendPet
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendPet $sendPet)
    {
        //
    }
}
