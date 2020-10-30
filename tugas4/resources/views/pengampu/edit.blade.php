@extends('layout.app')

    @section('title','CRUD Dosen Pengampu')

    @section('judul')
      Edit Data Dosen Pengampu
    @endsection

    @section('konten')
    <form action="/pengampu/{{$pengampu->id}}" method="POST">
        @csrf
        @method('PUT')
      <p>
         <label for="id_penawaran_mk">Id Penawaran MK</label>
          <select name="id_penawaran_mk" id="id_penawaran_mk">
            @foreach($penawaran_mk as $penawaran_mks)
              <option value="{{ $penawaran_mks->id }}">{{ $penawaran_mks->matakuliah->nama_mk }}</option>
            @endforeach
          </select>
      </p>
      </p>
      <p>
        <label for="id_dosen">nama dosen</label>
          <select name="id_dosen" id="id_dosen">
            @foreach($dosen as $dosens)
              <option value="{{ $dosens->id }}">{{ $dosens->nama_dosen }}</option>
            @endforeach
            </select>
      </p>
      <p>
        <label for="order">Order</label>
        <input type="text" name="order" value="{{$pengampu->order}}" >
      </p>
      
      <p>
    
          <input type="submit" value="Simpan">
      </p>
      </form>
    @endsection