<?php

namespace App\Http\Controllers;

use App\PetCare;
use Illuminate\Http\Request;

class PetCareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $petcare = new PetCare;
        $petcare->nama = $request->name;
        $petcare->telpon = $request->telpon;
        $petcare->alamat = $request->alamat;
        $petcare->jenis_binatang = $request->jenis_binatang;
        $petcare->lama_penitipan = $request->lama_penitipan;
        $petcare->catatan = $request->catatan;
        $petcare->save();
        return redirect('petcare');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PetCare  $petCare
     * @return \Illuminate\Http\Response
     */
    public function show(PetCare $petCare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PetCare  $petCare
     * @return \Illuminate\Http\Response
     */
    public function edit(PetCare $petCare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PetCare  $petCare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetCare $petCare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PetCare  $petCare
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetCare $petCare)
    {
        //
    }
}
