@extends('layout.app')

    @section('title','CRUD Penawaran MK')

    @section('judul')
      Edit Data Penawaran MK
    @endsection

    @section('konten')
    <form action="/penawaran_mk/{{$penawaran_mk->id}}" method="POST">
        @csrf
        @method('PUT')
      <p>
        <label for="tahun_ajaran">Tahun Ajaran</label>
        <input type="text" name="tahun_ajaran" value="{{$penawaran_mk->tahun_ajaran}}" >
      </p>
      <p>
        <label for="semester">Semester</label>
        <input type="text" name="semester" value="{{$penawaran_mk->semester}}" >
      </p>
       <p>
         <label for="id_prodi">Id prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodi as $prodis)
              <option value="{{ $prodis->id }}">{{ $prodis->nama_prodi }}</option>
            @endforeach
            </select>
      </p>
      <p>
          <label for="id_matakuliah">Id Matakuliah</label>
          <select name="id_matakuliah" id="id_matakuliah">
            @foreach($mk as $mks)
              <option value="{{ $mks->id }}">{{ $mks->nama_mk }}</option>
            @endforeach
            </select>
      </p>
       <p>
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" value="{{$penawaran_mk->kelas}}" >
      </p>
      
      <p>
    
          <input type="submit" value="Simpan">
      </p>
      </form>
    @endsection