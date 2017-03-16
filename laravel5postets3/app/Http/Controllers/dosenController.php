<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
class dosenController extends Controller
{
  
    public function awal(){
    	return"Dosen Pengampu Matakuliah Framework";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();
    	$dosen->nama = 'Bambang Hariyono';
    	$dosen->nip = '193247';
    	$dosen->pengguna_id= '1';
    	$dosen->save();
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}