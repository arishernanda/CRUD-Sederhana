@extends('layout.app')

@section('title','CRUD KRS')

@section('judul')

 Daftar KRS

 @endsection

 @section('konten')
      <input type="button" value="Tambah KRS" onclick="location.href='/krs/create'">
      <br>
      @if($krs->isEmpty())
        Belum ada data ...
      @else
      <table border="1">
        <tr>
          <th>No</th>
          <th>Id Mahasiswa</th>
          <th>Id Penawaran MK</th>
          <th>Nilai</th>
          <th>Opsi</th>

        </tr>
        @foreach($krs as $krss)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $krss->mahasiswa->nama}}</td>
            <td>{{ $krss->id_penawaran_mk}}</td>
            <td>{{ $krss->nilai_huruf}}</td>
            <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/krs/{{$krss->id}}/edit'">
                <form style="display:inline-block;" action="/krs/{{$krss->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/krs/{{$krss->id}}'">
              </span>
            </td>
          </tr>
        @endforeach
      </table>
      <br>
      <br>
      <a href="/matakuliah">Matakuliah </a> 
      <a href="/mahasiswa">Mahasiswa </a>
      <a href="/prodi">Prodi </a>
      <a href="/kurikulum">Kurikulum </a>
      <br>
      <br>
      <a href="/dosen">Dosen </a>  
      <a href="/penawaran_mk">Penawaran MK </a>  
      <a href="/pengampu">Pengampu</a>   
      @endif
    @endsection