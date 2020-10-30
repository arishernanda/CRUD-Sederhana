<?php

namespace App\Http\Controllers;

use App\krs;
use App\mahasiswa;
use App\penawaran_mk;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {
        $krs = krs::with('mahasiswa','penawaran_mk')->get();
        return view('krs.index', compact('krs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $mhs = mahasiswa::all();
        $penawaran_mk = penawaran_mk::all();
        return view('krs.tambah', compact('mhs','penawaran_mk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $krs = new krs;
        $krs->id_mahasiswa = $request->mahasiswa;
        $krs->id_penawaran_mk = $request->id_penawaran_mk;
        $krs->nilai_huruf = $request->nilai;
        $krs->save();
        return redirect('/krs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function show(krs $krs)
    {
        return view('tampilkan',compact('krs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function edit(krs $krs, $id)
    {
        $krs = krs::find($id);
        $mhs = mahasiswa::all();
        $penawaran_mk = penawaran_mk::all();
        return view('krs.edit', compact('krs','mhs','penawaran_mk', '$id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, krs $krs, $id)
    {
        $krs = krs::find($id);
        $krs->id_mahasiswa = $request->mahasiswa;
        $krs->id_penawaran_mk = $request->id_penawaran_mk;
        $krs->nilai_huruf = $request->nilai;
        $krs->save();
        return redirect('/krs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\krs  $krs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $krs = krs::find($id);
        $krs->delete();
        return redirect('/krs');
    }
}
