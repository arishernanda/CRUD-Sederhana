<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public function prodi()
   {
   		return $this->hasOne('App\prodi','id', 'id_prodi');
   }

   public function dosen()
   {
   		return $this->hasOne('App\dosen','id', 'id_pa');
   }
    
    public function matakuliah()
   {
   		return $this->belongsTo('App\matakuliah');
   }
    
    
}
