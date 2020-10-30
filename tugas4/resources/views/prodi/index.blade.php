@extends('layout.app')

@section('title','CRUD Prodi')

@section('judul')

 Daftar Prodi 

 @endsection

 @section('konten')
      <input type="button" value="Tambah Prodi" onclick="location.href='/prodi/create'">  
      <br>
      @if($all_prodi->isEmpty())
        Belum ada data ...
      @else
      <br>
      <table border="1">
        <tr>
          <th>No</th>
          <th>Nama Prodi</th>
          <th>Opsi</th>

        </tr>
        @foreach($all_prodi as $prodi)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$prodi->nama_prodi}}</td>
            <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/prodi/{{$prodi->id}}/edit'">
                <form style="display:inline-block;" action="/prodi/{{$prodi->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/prodi/{{$prodi->id}}'">
              </span>
            </td>
          </tr>
        @endforeach
      </table>
      <br>
      <a href="/matakuliah">Matakuliah </a> 
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