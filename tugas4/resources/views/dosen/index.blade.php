@extends('layout.app')

@section('title','CRUD Dosen')

@section('judul')

 Daftar Dosen

 @endsection

 @section('konten')
      <input type="button" value="Tambah Dosen" onclick="location.href='/dosen/create'">
      <br>
      <br>
      @if($all_dosen->isEmpty())
        Belum ada data ...
      @else
      <table border="1">
        <tr>
          <th>No</th>
          <th>Id Prodi</th>
          <th>Nip Dosen</th>
          <th>Nama Dosen</th>
          <th>Opsi</th>

        </tr>
        @foreach($all_dosen as $dosen)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$dosen->id_prodi}}</td>
            <td>{{$dosen->nip_dosen}}</td>
            <td>{{$dosen->nama_dosen}}</td>
            <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/dosen/{{$dosen->id}}/edit'">
                <form style="display:inline-block;" action="/dosen/{{$dosen->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/dosen/{{$dosen->id}}'">
              </span>
            </td>
          </tr>
        @endforeach
      </table>
      <br>
      <a href="/matakuliah">Matakuliah </a> 
      <a href="/mahasiswa">Mahasiswa </a>
      <a href="/prodi">Prodi </a>
      <a href="/kurikulum">Kurikulum </a>
      <br>
      <br>
      <a href="/krs">KRS </a>  
      <a href="/penawaran_mk">Penawaran MK </a>  
      <a href="/pengampu">Pengampu</a>    
      @endif
    @endsection