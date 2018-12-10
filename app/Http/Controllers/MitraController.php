<?php

namespace App\Http\Controllers;

use App\mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mitra');
    }

    public function index_care()
    {
        return view('mitra_care');
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
        $imageName = $request->file('gambar');
        if($imageName!==null)
        {
            // get the extension
            $extension = $imageName->getClientOriginalExtension();
            Storage::disk('public')->put($imageName->getFilename().'.'.$extension, File::get($imageName));
        }

        $produk = new mitra;
        $produk->nama = $request->nama;
        $produk->gambar = $imageName->getFilename().'.'.$extension;
        $produk->save();
        return redirect('/mitra_care');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(mitra $mitra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mitra $mitra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(mitra $mitra)
    {
        //
    }
}
