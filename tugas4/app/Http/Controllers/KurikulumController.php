<?php

namespace App\Http\Controllers;

use App\kurikulum;
use App\prodi;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_kurikulum = kurikulum::get();
        return view('kurikulum.index',compact('all_kurikulum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = prodi::all();
        return view('kurikulum.tambah',compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $krklm = new kurikulum();
        $krklm->nama_kurikulum = $request->nama_kurikulum;
        $krklm->tahun = $request->tahun;
        $krklm->id_prodi = $request->id_prodi;
        $krklm->save();
        return redirect('/kurikulum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(kurikulum $kurikulum)
    {
        return view('tampilkan',compact('kurikulum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(kurikulum $kurikulum)
    {
        $prodis = prodi::all();
        return view('kurikulum.edit',compact('kurikulum','prodis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $krklm = kurikulum::find($id);
        $krklm->nama_kurikulum = $request->nama_kurikulum;
        $krklm->tahun = $request->tahun;
        $krklm->id_prodi = $request->id_prodi;
        $krklm->save();
        return redirect('/kurikulum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(kurikulum $kurikulum)
    {
        $kurikulum->delete();
        return redirect('/kurikulum');
    }
}
