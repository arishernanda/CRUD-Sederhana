<?php

namespace App\Http\Controllers;

use App\matakuliah;
use App\kurikulum;
use App\dosen;
use App\prodi;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_matakuliah = matakuliah::with('prodi', 'kurikulum', 'dosen')->get();
        return view('matakuliah.matakuliah', compact('all_matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosens = dosen::all();
        $prodis = prodi::all();
        return view('matakuliah.tambah', compact('dosens', 'prodis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mk = new matakuliah();
        $mk->kode_mk = $request->kode_mk;
        $mk->nama_mk = $request->nama_mk;
        $mk->sks = $request->sks;
        $mk->semester = $request->semester;
        $mk->id_kurikulum = $request->id_kurikulum;
        $mk->id_dosen = $request->id_dosen;
        $mk->id_prodi = $request->id_prodi;
        $mk->save();
        return redirect('/matakuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(matakuliah $matakuliah)
    {
        return view('matakuliah.tampilkan',compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(matakuliah $matakuliah)
    {
        $prodis = prodi::all();
        $dosens = dosen::all();
        return view('matakuliah.editmk',compact('matakuliah', 'prodis', 'dosens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matakuliah $matakuliah)
    {
        $matakuliah->kode_mk = $request->kode_mk;
        $matakuliah->nama_mk = $request->nama_mk;
        $matakuliah->sks = $request->sks;
        $matakuliah->semester = $request->semester;
        $matakuliah->id_kurikulum = $request->id_kurikulum;
        $matakuliah->id_dosen = $request->nama_dosen;
        $matakuliah->id_prodi = $request->id_prodi;
        $matakuliah->save();
        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect('/matakuliah');
    
    }
}
