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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/public', function () {
    return view('nofal');
});


Route::get('pengguna', 'penggunaController@awal');
Route::get('pengguna/tambah', 'penggunaController@tambah');
Route::post('pengguna/simpan', 'penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::get('pengguna/{pengguna}', 'penggunaController@lihat');
Route::post('pengguna/edit/{pengguna}', 'penggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'penggunaController@hapus');


Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}', 'matakuliahController@lihat');
Route::post('matakuliah/simpan', 'matakuliahController@simpan');
Route::get('matakuliah/edit{matakuliah}', 'matakuliahController@edit');
Route::post('matakuliah/edit{matakuliah}', 'matakuliahController@update');
Route::get('matakuliah/hapus{matakuliah}', 'matakuliahController@hapus');

Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::get('ruangan/{ruangan}', 'ruanganController@simpan');
Route::post('ruangan/simpan', 'ruanganController@lihat');
Route::get('ruangan/edit/{ruangan}', 'ruanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'ruanganController@update');
Route::get('ruangan/hapus/{ruangan}', 'ruanganController@hapus');


Route::get('dosen','Dosencontroller@awal');
Route::get('dosen/tambah','Dosencontroller@tambah');
Route::post('dosen/simpan', 'dosenController@simpan');
Route::get('dosen/edit/{dosen}', 'dosenController@edit');
Route::get('dosen/{dosen}', 'dosenController@lihat');
Route::post('dosen/edit/{dosen}', 'dosenController@update');
Route::get('dosen/hapus/{dosen}', 'dosenController@hapus');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');
Route::post('mahasiwa/{mahasiswa}', 'mahasiswaController@lihat');
Route::post('mahasiswa/simpan', 'mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}', 'mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}', 'mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}', 'mahasiswaController@hapus');



Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
Route::post('jadwal_matakuliah/simpan', 'jadwal_matakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'jadwal_matakuliahController@edit');
Route::get('jadwal_matakuliah/{jadwal_matakuliah}', 'jadwal_matakuliahController@lihat');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'jadwal_matakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}', 'jadwal_matakuliahController@hapus');

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
Route::post('dosen_matakuliah/simpan', 'dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}', 'dosen_matakuliahController@edit');
Route::get('dosen_matakuliah/{dosen_matakuliah}', 'dosen_matakuliahController@lihat');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}', 'dosen_matakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}', 'dosen_matakuliahController@hapus');





