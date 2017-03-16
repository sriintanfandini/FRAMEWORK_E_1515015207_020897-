<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
    public function awal()
    {
    	return"Ruangan Baru";
    }
    public function tambah(){

    	return $this->simpan();
    }
    public function simpan(){
    	$ruangan = new ruangan();
    	$ruangan->id = '';
    	$ruangan->title= 'ruang 207';
    	$ruangan->save();
    	return "data dengan id {$ruangan->id} telah disimpan";
    }
}
