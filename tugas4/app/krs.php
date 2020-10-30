<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class krs extends Model
{
    public function penawaran_mk()
   {
   		return $this->hasOne('App\penawaran_mk','id', 'id_penawaran_mk');
   }

   public function mahasiswa()
   {
   		return $this->hasOne('App\mahasiswa','id', 'id_mahasiswa');
   }
}
