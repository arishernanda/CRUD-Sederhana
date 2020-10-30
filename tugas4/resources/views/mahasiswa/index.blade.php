@extends('layout.app')

@section('title','CRUD Mahasiswa')

@section('judul')

 Daftar Mahasiswa

 @endsection

 @section('konten')
      <input type="button" value="Tambah Mahasiswa" onclick="location.href='/mahasiswa/create'">
      <br>
      <br>
      @if($all_mahasiswa->isEmpty())
        Belum ada data ...
      @else
      <table border="1">
        <tr>
          <th>No</th>
          <th>Prodi</th>
          <th>Nama Mahasiswa</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>id PA</th>
          <th>Opsi</th>

        </tr>
        @foreach($all_mahasiswa as $mhs)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$mhs->prodi->nama_prodi}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->alamat}}</td>
            <td>{{$mhs->email}}</td>
            <td>{{$mhs->tempat_lahir}}</td>
            <td>{{$mhs->tanggal_lahir}}</td>
            <td>{{$mhs->dosen->nama_dosen}}</td>
            <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/mahasiswa/{{$mhs->id}}/edit'">
                <form style="display:inline-block;" action="/mahasiswa/{{$mhs->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/mahasiswa/{{$mhs->id}}'">
              </span>
            </td>
          </tr>
        @endforeach
      </table>
      <br>
      <a href="/matakuliah">Matakuliah </a> 
      <a href="/prodi">Prodi </a>
      <a href="/dosen">Dosen </a>
      <a href="/kurikulum">Kurikulum </a> 
      <br>
      <br>
      <a href="/krs">KRS </a>
      <a href="/penawaran_mk">Penawaran MK </a>
      <a href="/pengampu">Pengampu </a> 
      @endif
    @endsection