<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'telp',
        'alamat'
    ];

    // function relasi one to many
    public function mapel(){
        return $this->hasMany(Mapel::class);
    }
}
