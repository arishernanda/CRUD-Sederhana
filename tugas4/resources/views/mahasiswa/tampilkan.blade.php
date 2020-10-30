@extends('layout.app')

    @section('title','CRUD Mahasiswa')

    @section('judul')
      Edit Data Mahasiswa
    @endsection

    @section('konten')
      <p>
        <label for="id_prodi">nama prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodis as $prodi)
              <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
        </select>
      </p>
      <p>
        <label for="nim">nim</label>
        <input type="text" name="nim" value="{{$mahasiswa->nim}}" readonly>
      </p>
      <p>
        <label for="nama">nama</label>
        <input type="text" name="nama" value="{{$mahasiswa->nama}}" readonly>
      </p>
      <p>
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" value="{{$mahasiswa->alamat}}" readonly>
      </p>
      <p>
        <label for="email">email</label>
        <input type="text" name="email" value="{{$mahasiswa->email}}" readonly>
      </p>
      <p>
        <label for="tempat_lahir">tempat_lahir</label>
        <input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}" readonly>
      </p>
      <p>
        <label for="tanggal_lahir">tanggal_lahir</label>
        <input type="text" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" readonly>
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
        <input type="button" value="Kembali" onclick="location.href='/mahasiswa'">
      </p>
    @endsection