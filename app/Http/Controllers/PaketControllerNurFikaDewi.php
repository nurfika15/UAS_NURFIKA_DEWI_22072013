<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketControllerNurFikaDewi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Paket::all();
        return view('paket.paket',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paket.tambah_paket');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paket = new Paket;
        $paket->nama_paket = $request->nama;
        $paket->harga_paket = $request->harga;
        if ($paket->save()){
            return redirect()->route('paket');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        return view('paket.edit_paket',compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $paket)
    {
        $paket = Paket::find($request->id_data);
        $paket->nama_paket = $request->nama;
        $paket->harga_paket = $request->harga;
        if ($paket->update()){
            return redirect()->route('paket');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        if (Paket::destroy($paket->id)){
            return redirect()->route('paket');
        }
    }
}
