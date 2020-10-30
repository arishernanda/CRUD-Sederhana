@extends('layout.app')

    @section('title','CRUD Dosen')

    @section('judul')
      Edit Data Dosen
    @endsection

    @section('konten')
      <p>
        <label for="id_prodi">nama prodi</label>
        <select name="id_prodi" id="id_prodi">
          <option value="1" @if($matakuliah->id_prodi==1) selected @endif>Teknik Elektro</option>
          <option value="2" @if($matakuliah->id_prodi==2) selected @endif>Teknologi Informasi</option>
          <option value="3" @if($matakuliah->id_prodi==3) selected @endif>Teknik Sipil</option>
          <option value="4" @if($matakuliah->id_prodi==4) selected @endif>Teknik Arsitek</option>
          <option value="5" @if($matakuliah->id_prodi==5) selected @endif>Teknik Mesin</option>
        </select>
      </p>
      <p>
        <label for="nip_dosen">nip_dosen</label>
        <input type="text" name="nip_dosen" value="{{$dosen->nip_dosen}}" readonly>
      </p>
      <p>
        <label for="nama_dosen">nama_dosen</label>
        <input type="text" name="nama_dosen" value="{{$dosen->nama_dosen}}" readonly>
      </p>
      
      <p>
        <input type="button" value="Kembali" onclick="location.href='/dosen'">
      </p>
    @endsection