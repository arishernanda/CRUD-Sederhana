<?php

namespace App\Http\Controllers;

use App\dosen;
use App\prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_dosen = dosen::get();
        return view('dosen.index',compact('all_dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = prodi::all();
        return view('dosen.tambah', compact('prodis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new dosen();
        $dosen->id_prodi = $request->id_prodi;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->save();
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(dosen $dosen)
    {
        return view('tampilkan',compact('dosen'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = dosen::find($id);
        $prodis = prodi::all();
        return view('dosen.edit',compact('dosen','id','prodis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dosen = dosen::find($id);
        $dosen->id_prodi = $request->id_prodi;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->save();
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(dosen $dosen)
    {
        $dosen->delete();
        return redirect('/dosen');
    }
}
