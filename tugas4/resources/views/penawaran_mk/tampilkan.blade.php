@extends('layout.app')

    @section('title','CRUD Penawaran MK')

    @section('judul')
      Edit Data Penawaran MK
    @endsection

    @section('konten')
      <p>
        <label for="tahun_ajaran">Tahun Ajaran</label>
        <input type="text" name="tahun_ajaran" value="{{$penawaran_mk->tahun_ajaran}}" readonly>

      </p>
      <p>
        <label for="semester">Semester</label>
        <input type="text" name="semester" value="{{$penawaran_mk->semester}}" readonly>
      </p>
       <p>
        <label for="id_prodi">nama prodi</label>
          <select name="id_prodi" id="id_prodi">
            @foreach($prodis as $prodi)
              <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
            @endforeach
        </select>
      </p>
      <p>
        <label for="id_matakuliah">Id Matakuliah</label>
          <select name="id_matakuliah" id="id_matakuliah">
            @foreach($mk as $mk)
              <option value="{{ $mk->id }}">{{ $mk->id_matakuliah }}</option>
            @endforeach
        </select>
      </p>
      
      <p>
        <input type="button" value="Kembali" onclick="location.href='/penawaran_mk'">
      </p>
    @endsection