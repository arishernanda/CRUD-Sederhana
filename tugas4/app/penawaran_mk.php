<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penawaran_mk extends Model
{
    public function pengampu()
   {
   		return $this->belongsTo('App\pengampu');
   }

   public function krs()
   {
   		return $this->belongsTo('App\krs');
   }

   public function prodi()
   {
   		return $this->hasOne('App\prodi','id', 'id_prodi');
   }

   public function matakuliah()
   {
   		return $this->hasOne('App\matakuliah','id', 'id_matakuliah');
   }
}
