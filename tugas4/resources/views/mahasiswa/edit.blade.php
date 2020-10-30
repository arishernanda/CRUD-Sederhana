@extends('layout.app')

    @section('title','CRUD Mahasiswa')

    @section('judul')
      Edit Data Mahasiswa
    @endsection

    @section('konten')
    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
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
        <label for="nim">Nim</label>
        <input type="text" name="nim" value="{{$mahasiswa->nim}}" >
      </p>
      <p>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="{{$mahasiswa->nama}}" >
      </p>
      <p>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="{{$mahasiswa->alamat}}" >
      </p>
         <label for="email">Email</label>
        <input type="text" name="email" value="{{$mahasiswa->email}}" >
      <p>
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}" >
      </p>
      <p>
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" >
     </p>
      <p>
          <label for="id_dosen">Nama PA</label>
          <select name="id_dosen" id="id_dosen">
            @foreach($dosens as $dosen)
              <option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
            @endforeach
            </select>
      </p>
      
      <p>
    
          <input type="submit" value="Simpan">
      </p>
      </form>
    @endsection