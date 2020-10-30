@extends('layout.app')

    @section('title','CRUD Kurikulum')

    @section('judul')
      Edit Data Kurikulum
    @endsection

    @section('konten')
      <p>
        <label for="nama_kurikulum">Kurikulum</label>
        <input type="text" name="nama_kurikulum" value="{{$krklm->nama_kurikulum}}" readonly>
      </p>
      <p>
        <label for="tahun">Tahun</label>
        <input type="text" name="tahun" value="{{$krklm->tahun}}" readonly>
      </p>
       <p>
        <label for="id_prodi">Id Prodi</label>
        <input type="text" name="tahun" value="{{$krklm->id_prodi}}" readonly>
      </p>
      
      <p>
        <input type="button" value="Kembali" onclick="location.href='/kurikulum'">
      </p>
    @endsection