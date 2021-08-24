<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    public function Matkul(){
        return $this->hasMany(Matkul::class, 'kode_matakuliah');
    }
}
