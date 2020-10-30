@extends('layout.app')

    @section('title','CRUD KRS')

    @section('judul')
      Tambah KRS
    @endsection

    @section('konten')
      <form action="/krs" method="POST">
        @csrf
        <p>
          <label>Mahasiswa</label> 
          <select class="form-control" name="mahasiswa">
           @foreach($mhs as $mh)
              <option value="{{ $mh->id}}">{{$mh->nama}}
              </option>
           @endforeach
        </select>
        </p>
        <p>
          <label>Id Penawaran MK</label>
          <select class="form-control" name="id_penawaran_mk">
           @foreach($penawaran_mk as $penawaran_mks)
              <option value="{{ $penawaran_mks->id}}">{{$penawaran_mks->id}}
              </option>
           @endforeach
          </select>
        </p>
        <p>
          <label for="nilai_huruf">Nilai</label>
          <input type="text" name="nilai">
          
        </p>
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/krs'">
        </p>
      </form>
    @endsection