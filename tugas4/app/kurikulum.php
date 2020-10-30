<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kurikulum extends Model
{
    public function prodi()
   {
   		return $this->hasOne('App\prodi','id', 'id_prodi');
   }

    public function matakuliah()
   {
   		return $this->belongsTo('App\matakuliah');
   }
    
}
