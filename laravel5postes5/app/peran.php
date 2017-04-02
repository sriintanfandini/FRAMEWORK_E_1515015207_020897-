<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    Protected $table = 'peran';
    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    } 
}
