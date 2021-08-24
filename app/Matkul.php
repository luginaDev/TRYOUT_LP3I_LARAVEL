<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    public function Dosen()
    {
      

        return $this->belongsTo(Dosen::class, 'kode_matakuliah', 'kode_matakuliah');
    }
}
