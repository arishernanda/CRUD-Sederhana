<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/matakuliah','MatakuliahController');

Route::resource('/mahasiswa','MahasiswaController');

Route::resource('/dosen','DosenController');

Route::resource('/prodi','ProdiController');

Route::resource('/kurikulum','KurikulumController');

Route::resource('/pengampu','PengampuController');

Route::resource('/penawaran_mk','PenawaranMkController');

Route::resource('/krs','KrsController');

