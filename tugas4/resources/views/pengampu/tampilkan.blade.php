@extends('layout.app')

    @section('title','CRUD Pengampu')

    @section('judul')
      Edit Data Pengampu
    @endsection

    @section('konten')
      <p>
        <label for="id_penawaran_mk">Id Penawaran MK</label>
          <select name="id_penawaran_mk" id="id_penawaran_mk">
            @foreach($penawaran_mk as $penawaran_mk)
              <option value="{{ $penawaran_mk->id }}">{{ $penawaran_mk->id_penawaran_mk }}</option>
            @endforeach
        </select>
      </p>
      <p>
        <label for="id_dosen">Id Dosen</label>
          <select name="id_dosen" id="id_dosen">
            @foreach($dosen as $dosen)
              <option value="{{ $dosen->id }}">{{ $dosen->id_prodi }}</option>
            @endforeach
        </select>
      </p>
       <p>
        <label for="order">Order</label>
        <input type="text" name="order" value="{{$order->order}}" readonly>
      </p>
  
      <p>
        <input type="button" value="Kembali" onclick="location.href='/pengampu'">
      </p>
    @endsection

     
