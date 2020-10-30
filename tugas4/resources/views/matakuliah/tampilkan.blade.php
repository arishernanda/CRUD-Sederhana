@extends('layout.app')

    @section('title','CRUD Matakuliah')

    @section('judul')
      Edit Data Matakuliah
    @endsection

    @section('konten')
      <p>
        <label for="kode_mk">kode_matakuliah</label>
        <input type="text" name="kode_mk" value="{{$matakuliah->kode_mk}}" readonly>
      </p>
      <p>
        <label for="nama_mk">nama_matakuliah</label>
        <input type="text" name="nama_mk" value="{{$matakuliah->nama_mk}}" readonly>
      </p>
      <p>
        <label for="sks">sks</label>
        <input type="text" name="sks" value="{{$matakuliah->sks}}" readonly>
      </p>
      <p>
        <label for="semester">semester</label>
        <input type="text" name="semester" value="{{$matakuliah->semester}}" readonly>
      </p>
        
        <p>
        <label for="id_kurikulum">nama kurikulum</label>
        <select name="id_kurikulum" id="id_kurikulum">
          <option value="1" @if($matakuliah->id_kurikulum==0) selected @endif>ktsp</option>
          <option value="2" @if($matakuliah->id_kurikulum==1) selected @endif>k13</option>
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
         <label for="id_prodi">nama prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodis as $prodi)
              <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
        </select>
      </p>
      
      <p>
        <input type="button" value="Kembali" onclick="location.href='/matakuliah'">
      </p>
    @endsection
