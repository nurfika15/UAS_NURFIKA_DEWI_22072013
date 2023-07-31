<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganControllerNurFikaDewi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.pelanggan',compact('data'));
    }

    public static function get_paket($idnya){
        return Paket::find($idnya)->nama_paket;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paket_jns = Paket::all();
        return view('pelanggan.tambah_pelanggan',compact('paket_jns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelanggan = new Pelanggan;
        $pelanggan->kode_pelanggan = $request->kode;
        $pelanggan->nama_pelanggan = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_telp = $request->tlp;
        $pelanggan->paket_id = $request->paket;
        if ($pelanggan->save()){
            return redirect()->route('pelanggan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $pelanggan)
    {
        $paket_jns = Paket::all();
        return view('pelanggan.edit_pelanggan',compact('pelanggan','paket_jns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $pelanggan = Pelanggan::find($request->id_data);
        $pelanggan->kode_pelanggan = $request->kode;
        $pelanggan->nama_pelanggan = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_telp = $request->tlp;
        $pelanggan->paket_id = $request->paket;
        if ($pelanggan->update()){
            return redirect()->route('pelanggan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        if (Pelanggan::destroy($pelanggan->id)){
            return redirect()->route('pelanggan');
        }
    }
}
