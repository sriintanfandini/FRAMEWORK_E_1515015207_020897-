<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JadwalMatakuliahRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $validasi = [
        'nama'=>'required',
        'ruang_id'=>'required',
        'dosen_matakuliah_id'=>'required'
        ];
        if ($this->is('jadwal_matakuliah/tambah'))
        {
           
        }
        return $validasi;
    }
}
