@extends('layout.app')

    @section('title','CRUD Prodi')

    @section('judul')
      Tambah Prodi
    @endsection

    @section('konten')
      <form action="/prodi" method="POST">
        @csrf
        <p>
          <label for="nama_prodi">nama_prodi</label>
          <input type="text" name="nama_prodi" >
        </p>
        
          
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/dosen'">
        </p>
      </form>
    @endsection