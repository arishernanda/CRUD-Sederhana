<?php

namespace App\Http\Controllers;

use App\penawaran_mk;
use App\prodi;
use App\matakuliah as matakuliah;
use Illuminate\Http\Request;

class PenawaranMkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penawaran_mk = penawaran_mk::with('prodi','matakuliah')->get();
        return view('penawaran_mk.index', compact('penawaran_mk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mk = matakuliah::all();
        $prodi = prodi::all();
        return view('penawaran_mk.tambah', compact('mk','prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penawaran_mk = new penawaran_mk;
        $penawaran_mk->tahun_ajaran = $request->tahun_ajaran;
        $penawaran_mk->semester = $request->semester;
        $penawaran_mk->id_prodi = $request->id_prodi;
        $penawaran_mk->id_matakuliah = $request->id_matakuliah;
        $penawaran_mk->kelas = $request->kelas;
        $penawaran_mk->save();
        return redirect('/penawaran_mk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function show(penawaran_mk $penawaran_mk)
    {
        return view('tampilkan',compact('penawaran_mk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penawaran_mk = penawaran_mk::find($id);
        $mk = matakuliah::all();
        $prodi = prodi::all();
        return view('penawaran_mk.edit', compact('penawaran_mk','mk','prodi', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penawaran_mk = penawaran_mk::find($id);
        $penawaran_mk->tahun_ajaran = $request->tahun_ajaran;
        $penawaran_mk->semester = $request->semester;
        $penawaran_mk->id_prodi = $request->id_prodi;
        $penawaran_mk->id_matakuliah = $request->id_matakuliah;
        $penawaran_mk->kelas = $request->kelas;
        $penawaran_mk->save();
        return redirect('/penawaran_mk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penawaran_mk  $penawaran_mk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penawaran_mk = penawaran_mk::find($id);
        $penawaran_mk->delete();
        return redirect('/penawaran_mk');
    }
}
