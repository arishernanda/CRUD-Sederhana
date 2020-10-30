@extends('layout.app')

@section('title','CRUD Matakuliah')

@section('judul')

 Daftar Matakuliah

 @endsection

 @section('konten')
      
      <input type="button" value="Tambah Matakuliah" onclick="location.href='/matakuliah/create'">
      <br>
      <br>
      @if($all_matakuliah->isEmpty())
        Belum ada data ...
      @else
      <table border="1">
        <tr>
          <th>No</th>
          <th>Kode Matakuliah</th>
          <th>Nama Matakuliah</th>
          <th>Sks</th>
          <th>Semester</th>
          <th>Kurikulum</th>
          <th>Dosen</th>
          <th>Prodi</th>
          <th>Opsi</th>

        </tr>
        @foreach($all_matakuliah as $mk)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$mk->kode_mk}}</td>
            <td>{{$mk->nama_mk}}</td>
            <td>{{$mk->sks}}</td>
            <td>{{$mk->semester}}</td>
            <td>{{$mk->kurikulum->nama_kurikulum}}</td>
            <td>{{$mk->dosen->nama_dosen}}</td>
            <td>{{$mk->prodi->nama_prodi}}</td>
            <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/matakuliah/{{$mk->id}}/edit'">
                <form style="display:inline-block;" action="/matakuliah/{{$mk->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/matakuliah/{{$mk->id}}'">
              </span>
            </td>
          </tr>
        @endforeach
      </table>
      <br>
      <a href="/prodi">Prodi </a> 
      <a href="/mahasiswa">Mahasiswa </a>
      <a href="/dosen">Dosen </a>
      <a href="/kurikulum">Kurikulum </a>  
      <br>
      <br>
      <a href="/krs">KRS </a>
      <a href="/penawaran_mk">Penawaran MK </a>
      <a href="/pengampu">Pengampu </a> 
      @endif
    @endsection