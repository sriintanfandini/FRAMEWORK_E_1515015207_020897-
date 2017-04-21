<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;
use App\pengguna;
use App\Http\Request\DosenRequest;

class dosenController extends Controller
{
    public function awal(){
        return view('dosen.awal', ['data'=>dosen::all()]);
    }
public function tambah(){
    return view('dosen.tambah');
    }
public function simpan(DosenRequest $input){
    if ($pengguna->save())
    {
    $dosen = new dosen;
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;
    $dosen->pengguna_id = $input->pengguna_id;
        if ($pengguna->dosen()->save($dosen)) $this->informasi = 'Berhasil Simpan Data';
    }
    return redirect('dosen')->with(['informasi'=>$informasi]);
    }
public function edit($id){
    $dosen = dosen::find($id);
    return view('dosen.edit')->with(array('dosen'=>$dosen));
    }
public function lihat($id){
    $dosen = dosen::find($id);
    return view('dosen.lihat')->with(array('dosen'=>$dosen));
}
public function update($id, DosenRequest $input){
    $dosen = dosen::find($id);
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;
    $dosen->pengguna_id = $input->pengguna_id;
    $informasi = $dosen->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('dosen')->with(['informasi'=>$informasi]);
}
public function hapus($id){
    $dosen = dosen::find($id);
    $informasi = $dosen->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('dosen')->with(['informasi'=>$informasi]);
}

}
