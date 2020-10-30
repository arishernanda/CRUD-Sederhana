@extends('layout.app')

    @section('title','CRUD Kurikulum')

    @section('judul')
      Edit Data Kurikulum
    @endsection

    @section('konten')
    <form action="/kurikulum/{{$kurikulum->id}}" method="POST">
        @csrf
        @method('PUT')
      <p>
        <label for="nama_kurikulum">Nama kurikulum</label>
        <input type="text" name="nama_kurikulum" value="{{$kurikulum->nama_kurikulum}}" >
      </p>
      <p>
        <label for="tahun">Tahun</label>
        <input type="text" name="tahun" value="{{$kurikulum->tahun}}" >
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
      </p>
      </form>
    @endsection