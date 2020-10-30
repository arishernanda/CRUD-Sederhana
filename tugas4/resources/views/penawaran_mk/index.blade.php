@extends('layout.app')

@section('title','CRUD Penawaran MK')

@section('judul')

 Daftar Penawaran MK

 @endsection

 @section('konten')
 
      <button><a href="/penawaran_mk/create">Tambah Data</a></button>
      <br>
      <br>
      @if($penawaran_mk->isEmpty())
        Belum ada data ...
      @else
      <table border="1">
        <tr>
          <th>No</th>
          <th>Tahun Ajaran</th>
          <th>Semester</th>
          <th>Id Prodi</th>
          <th>Id Matakuliah</th>
          <th>Kelas</th>

        </tr>
        @foreach($penawaran_mk as $penawaran_mks)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$penawaran_mks->tahun_ajaran}}</td>
            <td>{{$penawaran_mks->semester}}</td>
            <td>{{$penawaran_mks->prodi->nama_prodi}}</td>
            <td>{{$penawaran_mks->matakuliah->nama_mk}}</td>
            <td>{{$penawaran_mks->kelas}}</td>
            <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/penawaran_mk/{{$penawaran_mks->id}}/edit'">
                <form style="display:inline-block;" action="/penawaran_mk/{{$penawaran_mks->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/penawaran_mk/{{$penawaran_mks->id}}'">
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
      <a href="/krs">KRS </a> 
      <a href="/pengampu">Pengampu </a>
      @endif
    @endsection