<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosenmatakuliah;

class dosenmatakuliahController extends Controller
{
    public function awal(){
    	return "Data Dosen yang mengajar matakuliah";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosenmatakuliah = new dosenmatakuliah();
        $dosenmatakuliah->id = '';
    	$dosenmatakuliah->dosen_id = '8';
    	$dosenmatakuliah->matakuliah_id = '1';
       	$dosenmatakuliah->save();
    	return "data dengan Dosen Pengampu {$dosenmatakuliah->dosen_id} telah disimpan";
    }
}
