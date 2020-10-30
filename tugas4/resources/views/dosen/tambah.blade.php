@extends('layout.app')

    @section('title','CRUD Dosen')

    @section('judul')
      Tambah Dosen
    @endsection

    @section('konten')
      <form action="/dosen" method="POST">
        @csrf
        <p>
          <label for="id_prodi">nama prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodis as $prodi)
              <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
          </select>
        </p>
        <p>
          <label for="nip_dosen">nip_dosen</label>
          <input type="text" name="nip_dosen" >
        </p>
        <p>
          <label for="nama_dosen">nama_dosen</label>
          <input type="text" name="nama_dosen" >
        </p>
        
          
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/dosen'">
        </p>
      </form>
    @endsection