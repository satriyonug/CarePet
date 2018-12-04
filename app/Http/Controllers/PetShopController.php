<?php

namespace App\Http\Controllers;

use App\PetShop;
use Illuminate\Http\Request;

class PetShopController extends Controller
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
		$price=20000;
		$jml_barang= $request->jumlah_barang;
		$harga = $price*$jml_barang;
        for ($i=0; $i < $jml_barang ; $i++) { 
		$petshop = new PetShop;
        $petshop->nama = $request->nama;
        $petshop->alamat = $request->alamat;
		$petshop->kota = $request->kota;
		$petshop->provinsi = $request->provinsi;
		$petshop->kodepos = $request->kodepos;
		$petshop->telpon = $request->telpon;
        $petshop->jumlah_barang = $request->jumlah_barang;
		$petshop->harga = $harga;
        $petshop->catatan = $request->catatan;
        $petshop->save();
		}
		
		 return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PetShop  $petShop
     * @return \Illuminate\Http\Response
     */
    public function show(PetShop $petShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PetShop  $petShop
     * @return \Illuminate\Http\Response
     */
    public function edit(PetShop $petShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PetShop  $petShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetShop $petShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PetShop  $petShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetShop $petShop)
    {
        //
    }
}
