<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
    public function awal(){
    	return"Matakuliah Framework";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$matakuliah = new matakuliah();
    	$matakuliah->id = 'MK0001';
    	$matakuliah->title = 'Selasa 08.30 Pagi';
    	$matakuliah->save();
    	return "data dengan matakuliah {$matakuliah->id} telah disimpan";
    }}
