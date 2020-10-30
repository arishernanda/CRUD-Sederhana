<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\dosen;
use App\prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_mahasiswa = mahasiswa::with('dosen','prodi')->get();
        return view('mahasiswa.index',compact('all_mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = prodi::all();
        $dosens = dosen::all();
        return view('mahasiswa.tambah', compact('prodis','dosens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = new mahasiswa();
        $mhs->id_prodi = $request->id_prodi;
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->alamat = $request->alamat;
        $mhs->email = $request->email;
        $mhs->tempat_lahir = $request->tempat_lahir;
        $mhs->tanggal_lahir = $request->tanggal_lahir;
        $mhs->id_pa = $request->id_dosen;
        $mhs->save();
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        return view('tampilkan',compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $mahasiswa = mahasiswa::find($id);
        $prodis = prodi::all();
        $dosens = dosen::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis','dosens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mhs = mahasiswa::find($id);
        $mhs->id_prodi = $request->id_prodi;
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->alamat = $request->alamat;
        $mhs->email = $request->email;
        $mhs->tempat_lahir = $request->tempat_lahir;
        $mhs->tanggal_lahir = $request->tanggal_lahir;
        $mhs->id_pa = $request->id_dosen;
        $mhs->save();
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
