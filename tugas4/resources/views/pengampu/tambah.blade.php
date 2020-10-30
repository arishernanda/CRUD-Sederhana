@extends('layout.app')

    @section('title','CRUD Dosen Pengampu')

    @section('judul')
      Tambah Dosen Pengampu
    @endsection

    @section('konten')
      <form action="/pengampu" method="POST">
        @csrf
        <p>
          <label>Id Penawaran MK</label>
          <select name="id_penawaran_mk" id="id_penawaran_mk">
            @foreach($penawaran_mk as $penawaran_mks)
              <option value="{{ $penawaran_mks->id }}">{{ $penawaran_mks->id }}</option>
            @endforeach
            </select>
        </p>
        <p>
          <label>Id Dosen</label>
          <select name="nama_dosen" id="id_dosen">
            @foreach($dosen as $dosens)
              <option value="{{ $dosens->id }}">{{ $dosens->nama_dosen}}</option>
            @endforeach
            </select>
        </p>
        <p>
          <label for="order">Order</label>
          <input type="text" name="order" >
        </p>
        
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/pengampu'">
        </p>
      </form>
    @endsection