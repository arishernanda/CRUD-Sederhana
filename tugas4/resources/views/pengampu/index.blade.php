@extends('layout.app')

@section('title','CRUD Dosen Pengampu')

@section('judul')

 Daftar Dosen Pengampu

 @endsection

 @section('konten')
      <input type="button" value="Tambah Dosen Pengampu" onclick="location.href='/pengampu/create'">
      <br>
      <br>
      @if($pengampu->isEmpty())
        Belum ada data ...
      @else

      
      <table border="1">
        <tr>
          <th>No</th>
          <th>Id Penawaran MK</th>
          <th>Id Dosen</th>
          <th>Order</th>
          <th>Keterangan</th>

        </tr>
        @foreach($pengampu as $pengampus)
          <tr>
            <td>{{$loop->iteration}}</td>

            <td>{{$pengampus->penawaran_mk->kelas}}</td>
            <td>{{$pengampus->dosen->nama_dosen}}</td>
            <td>{{$pengampus->order}}</td>
           
             <td>
              <span>
                <input type="button" value="Edit" onclick="location.href='/pengampu/{{$pengampus->id}}/edit'">
                <form style="display:inline-block;" action="/pengampu/{{$pengampus->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete">
                </form>
                <input type="button" value="Details" onclick="location.href='/pengampu/{{$pengampus->id}}'">
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
      @endif
    @endsection