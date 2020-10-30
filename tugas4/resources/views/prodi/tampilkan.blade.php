@extends('layout.app')

    @section('title','CRUD Mahasiswa')

    @section('judul')
      Edit Data Mahasiswa
    @endsection

    @section('konten')
      <p>
        <label for="nama_prodi">nama_prodi</label>
        <input type="text" name="nama_prodi" value="{{$prodi->nama_prodi}}" readonly>
      </p>
      
      <p>
        <input type="button" value="Kembali" onclick="location.href='/prodi'">
      </p>
    @endsection