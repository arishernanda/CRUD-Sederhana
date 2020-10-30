@extends('layout.app')

    @section('title','CRUD Mahasiswa')

    @section('judul')
      Tambah Mahasiswa
    @endsection

    @section('konten')
      <form action="/mahasiswa" method="POST">
        @csrf
        <p>
            <label>nama prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodis as $prodi)
              <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
            </select>
           </select>
        </p>
        <p>
          <label for="nim">Nim</label>
          <input type="text" name="nim" >
        </p>
        <p>
          <label for="nama">Nama</label>
          <input type="text" name="nama" >
        </p>
        <p>
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" >
        </p>
          <p>
            <label for="email">Email</label>
            <input type="text" name="email" >
          </select>
        </p>
        <p>
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" >
          </select>
        </p>
        <p>
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" >
        </p>
        <p>
          <label>Nama PA</label>
          <select name="id_dosen" id="id_dosen">
            @foreach($dosens as $dosen)
              <option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
            @endforeach
            </select>  
        </p>
          
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/mahasiswa'">
        </p>
      </form>
    @endsection