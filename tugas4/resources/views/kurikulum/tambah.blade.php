@extends('layout.app')

    @section('title','CRUD Kurikulum')

    @section('judul')
      Tambah Kurikulum
    @endsection

    @section('konten')
      <form action="/kurikulum" method="POST">
        @csrf
        <p>
          <label for="nama_kurikulum">Nama Kurikulum</label>
          <input type="text" name="nama_kurikulum" >
        </p>
        <p>
          <label for="tahun">Tahun</label>
          <input type="text" name="tahun" >
        </p>
        <p>
          <label for="id_prodi">Id prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodis as $prodi)
              <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
            </select>
        </p>
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/kurikulum'">
        </p>
      </form>
    @endsection