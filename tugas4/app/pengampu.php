<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengampu extends Model
{
    public function penawaran_mk()
   {
   		return $this->hasOne('App\penawaran_mk','id', 'id_penawaran_mk');
   }

   public function dosen()
   {
   		return $this->hasOne('App\dosen','id', 'id_dosen');
   }
}
