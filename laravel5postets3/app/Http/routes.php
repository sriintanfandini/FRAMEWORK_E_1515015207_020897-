<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/tambah','penggunacontroller@tambah');

Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('dosenmatakuliah','dosenmatakuliahcontroller@awal');
Route::get('dosenmatakuliah/tambah','dosenmatakuliahController@tambah');

Route::get('jadwalmatakuliah','jadwalmatakuliahcontroller@awal');
Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahController@tambah');

