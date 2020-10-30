@extends('layout.app')

    @section('title','CRUD KRS')

    @section('judul')
      Edit Data KRS
    @endsection

    @section('konten')
      <p>
        <label>Mahasiswa</label>
        <select class="form-control" name="mahasiswa">
           @foreach($mhs as mh)
              <option value="{{ $mhs->id}}">{{$mh->nama_mahasiswa}}
              </option>
           @endforeach
        </select>

      </p>
      <p>
        <label for="id_penawaran_mk">Penawaran MK</label>
        <input type="text" name="id_penawaran_mk" value="{{$krs->id_penawaran_mk}}" readonly>
      </p>
       <p>
        <label for="nilai_huruf">Nilai</label>
        <input type="text" name="nilai_huruf" value="{{$krs->nilai_huruf}}" readonly>
      </p>
      
      <p>
        <input type="button" value="Kembali" onclick="location.href='/krs'">
      </p>
    @endsection