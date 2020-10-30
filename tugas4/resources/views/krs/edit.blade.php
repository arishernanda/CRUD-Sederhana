@extends('layout.app')

    @section('title','CRUD KRS')

    @section('judul')
      Edit Data KRS 
    @endsection

    @section('konten')
    <form action="/krs/{{$krs->id}}" method="POST">
        @csrf
        @method('PUT')
      <p>
        <label for="id_mahasiswa">Id Mahasiswa</label>
        <input type="text" name="mahasiswa" value="{{$krs->id_mahasiswa}}" >
      </p>
      <p>
        <label for="id_penawaran_mk">Penawaran MK</label>
        <input type="text" name="id_penawaran_mk" value="{{$krs->id_penawaran_mk}}" >
      </p>
       <p>
        <label for="nilai_huruf">Nilai</label>
        <input type="text" name="nilai" value="{{$krs->nilai_huruf}}" > 
      </p>
      
      <p>
    
          <input type="submit" value="Simpan">
      </p>
      </form>
    @endsection