@extends('layout.app')

@section('title','CRUD Kurikulum')

@section('judul')

 Daftar Kurikulum

 @endsection

 @section('konten')
      <input type="button" value="Tambah Kurikulum" onclick="location.href='/kurikulum/create'">
      <br>
      <br>
      @if($all_kurikulum->isEmpty())
        Belum ada data ...
      @else
      <table border="1">
        <tr>
          <th>No</th>
          <th>Nama Kurikulum</th>
          <th>Tahun</th>
          <th>Id Prodi</th>
          <th>Opsi</th>
         
        </tr>
        @foreach($all_kurikulum as $krklm)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$krklm->nama_kurikulum}}</td>
            <td>{{$krklm->tahun}}</td>
            <td>{{$krklm->id_prodi}}</td>
           
            <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/kurikulum/{{$krklm->id}}/edit'">
                <form style="display:inline-block;" action="/kurikulum/{{$krklm->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/kurikulum/{{$krklm->id}}'">
              </span>
            </td>
          </tr>
        @endforeach
      </table>
      <br>
      <a href="/matakuliah">Matakuliah </a> 
      <a href="/mahasiswa">Mahasiswa </a>
      <a href="/dosen">Dosen </a>
      <a href="/prodi">Prodi </a>
      <br>
      <br>
      <a href="/krs">KRS </a>
      <a href="/penawaran_mk">Penawaran MK </a>
      <a href="/pengampu">Pengampu</a>  
      @endif
    @endsection