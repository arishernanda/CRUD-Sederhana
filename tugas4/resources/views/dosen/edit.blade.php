@extends('layout.app')

    @section('title','CRUD Dosen')

    @section('judul')
      Edit Data Dosen
    @endsection

    @section('konten')
    <form action="/dosen/{{$dosen->id}}" method="POST">
        @csrf
        @method('PUT')  
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
        <input type="text" name="nip_dosen" value="{{$dosen->nip_dosen}}" >
      </p>
        <label for="nama_dosen">Nama Dosen</label>
        <input type="text" name="nama_dosen" value="{{$dosen->nama_dosen}}">
      <p>
    
          <input type="submit" value="Simpan">
      </p>
      </form>
    @endsection