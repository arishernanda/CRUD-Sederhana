@extends('layout.app')

    @section('title','CRUD Matakuliah')

    @section('judul')
      Tambah Matakuliah
    @endsection

    @section('konten')
      <form action="/matakuliah" method="POST">
        @csrf
        <p>
          <label for="kode_mk">kode_matakuliah</label>
          <input type="text" name="kode_mk" >
        </p>
        <p>
          <label for="nama_mk">nama_matakuliah</label>
          <input type="text" name="nama_mk" >
        </p>
        <p>
          <label for="sks">sks</label>
          <input type="text" name="sks" >
        </p>
        <p>
          <label for="semester">semester</label>
          <input type="text" name="semester" >
        </p>
          <p>
          <label for="id_kurikulum">nama_kurikulum</label>
          <select name="id_kurikulum" id="id_kurikulum">
            <option value="1"> ktsp</option>
            <option value="2"> k13</option>
          </select>
        </p>
        <p>
          <label>nama dosen</label>
          <select name="id_dosen" id="id_dosen">
            @foreach($dosens as $dosen)
              <option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
            @endforeach
            </select>  
        </p>
        <p>
          <label>nama prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodis as $prodi)
              <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
            </select>
        </p>
          
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/matakuliah'">
        </p>
      </form>
    @endsection