<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
     public function matakuliah()
   {
   		return $this->belongsTo('App\matakuliah');
   }

     public function dosen()
   {
   		return $this->belongsTo('App\dosen');
   }

     public function kurikulum()
   {
   		return $this->belongsTo('App\kurikulum');
   }

     public function mahasiswa()
   {
   		return $this->belongsTo('App\mahasiswa');
   }
}
