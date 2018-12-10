<?php

namespace App\Http\Controllers;

use App\PetShop;
use App\PetCare;
use App\mitra;
use Illuminate\Http\Request;
use App\produk;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $transaksi = PetShop::select('*')->join('produks','produks.id_produk','=','pet_shops.id_barang' )->where('id_user', session()->get('userSession')['id'])->get();
        // dd($transaksi);
        return view('chart', ['transaksi' => $transaksi]);

        // return view('chart', ['transaksi' => $transaksi]);

    }

    public function index_care()
    {
        
        $transaksi_care = PetCare::select('*')->join('mitras','mitras.id_mitra','=','pet_cares.id_mitra')
        ->where('id_user', session()->get('userSession')['id'])->get();
        // dd($transaksi_care);
        return view('chart', ['transaksi_care' => $transaksi_care]);

        // return view('chart', ['transaksi' => $transaksi]);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $produk = PetShop::where('id', $request->id)->first();
        
        $produk->delete();
        return redirect('/chart/1')->with('info','Transaksi berhasil dihapus');
    }

    public function destroy_care(Request $request)
    {
        
        $produk = PetCare::where('id', $request->id)->first();
        
        $produk->delete();
        return redirect('/chart/2')->with('info','Transaksi berhasil dihapus');
    }
}
