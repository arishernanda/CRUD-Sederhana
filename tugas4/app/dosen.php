<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    public function prodi()
   {
   		return $this->hasOne('App\prodi','id', 'id_prodi');
   }

   public function matakuliah()
   {
   		return $this->belongsTo('App\matakuliah');
   }

   public function mahasiswa()
   {
   		return $this->belongsTo('App\mahasiswa');
   }

    
}
