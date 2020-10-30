<?php

namespace App\Http\Controllers;

use App\pengampu;
use App\penawaran_mk as penawaran_mk;
use App\dosen;
use Illuminate\Http\Request;

class PengampuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengampu = pengampu::with('penawaran_mk','dosen')->get();
        return view('pengampu.index', compact('pengampu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penawaran_mk = penawaran_mk::all();
        $dosen = dosen::all();
        return view('pengampu.tambah', compact('penawaran_mk','dosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengampu = new pengampu();
        $pengampu->id_penawaran_mk = $request->id_penawaran_mk;
        $pengampu->id_dosen = $request->nama_dosen;
        $pengampu->order = $request->order;
        $pengampu->save();
        return redirect('/pengampu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function show(pengampu $pengampu)
    {
        return view('tampilkan',compact('pengampu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengampu = pengampu::find($id);
        $penawaran_mk = penawaran_mk::all();
        $dosen = dosen::all();
        return view('pengampu.edit', compact('pengampu','penawaran_mk','penawaran_mk','dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengampu = pengampu::find($id);
        $pengampu->id_penawaran_mk = $request->id_penawaran_mk;
        $pengampu->id_dosen = $request->id_dosen;
        $pengampu->order = $request->order;
        $pengampu->save();
        return redirect('/pengampu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengampu  $pengampu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengampu = pengampu::find($id);
        $pengampu->delete();
        return redirect('/pengampu');
    }
}
