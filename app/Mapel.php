<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode', 'nama', 'semester'];

    // relasi many to many
    public function siswa(){
        return $this->belongsToMany(Siswa::class); 
    }

    // relasi one to may guru mapel
    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}

