<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    public function Matkul(){
        return $this->belongsTo(Matkul::class, 'kode_matakuliah', 'kode_matakuliah');
    }
    public function Mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
    

}
