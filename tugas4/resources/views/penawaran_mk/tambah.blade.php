@extends('layout.app')

    @section('title','CRUD Penawaran MK')

    @section('judul')
      Tambah Penawaran MK
    @endsection

    @section('konten')
      <form action="/penawaran_mk" method="POST">
        @csrf
        <p>
          <label for="tahun_ajaran">Tahun Ajaran</label>
          <input type="text" name="tahun_ajaran" >
        </p>
        <p>
          <label for="semester">Semester</label>
          <input type="text" name="semester" >
        </p>
        <p>
          <label>Id Prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodi as $prodis)
              <option value="{{ $prodis->id }}">{{ $prodis->id }}</option>
            @endforeach
            </select>
        </p>
        <p>
          <label for="id_matakuliah">Id Matakuliah</label>
          <select name="id_matakuliah" id="id_matakuliah">
            @foreach($mk as $mks)
              <option value="{{ $mks->id }}">{{ $mks->id }}</option>
            @endforeach
          </select>
        </p>
        <p>
          <label for="kelas">Kelas</label>
          <input type="text" name="kelas" >
        </p>
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/penawaran_mk'">
        </p>
      </form>
    @endsection