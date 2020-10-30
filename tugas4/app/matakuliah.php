<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    public function kurikulum()
   {
   		return $this->hasOne('App\kurikulum','id', 'id_kurikulum');
   }
    
    public function dosen()
   {
      	return $this->hasOne('App\dosen','id', 'id_dosen');
   }
    
    public function prodi()
   {
      	return $this->hasOne('App\prodi','id', 'id_prodi');
   }	
   public function penawaran_mk()
   {
      return $this->belongsTo('App\penawaran_mk');
   }
}
