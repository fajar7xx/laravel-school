<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;

    // agar database bisa menggunakan bahasa indonesia
    protected $table = 'siswa';

    // mana field yang bsia di isi
    // di jelaskan disini
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'kelamin',
        'agama',
        'alamat',
        'avatar',
        'user_id',
    ];

    // custom function untuk menampilkan jika 
    // user belum mempunyai avatar
    public function getAvatar(){
        if(!$this->avatar){
            return asset('assets/images/faces/face1.jpg');
        }

        return asset('images/avatar/' . $this->avatar);
    }

    // deklarasikan many to many 
    public function mapel(){
        return $this->belongsToMany(Mapel::class)
                    ->withPivot(['nilai'])
                    ->withTimestamps();
    } 

    // custom function
    // public function tes(){
    //     return 'tes';
    // }

    // fungsi nilai rata rat siswa
    public function nilaiRata(){
        if($this->mapel->isNotEmpty()){
            // ambil nilai2                
            $total = 0;
            $hitung = 0;
            foreach($this->mapel as $mapel){
                $total += $mapel->pivot->nilai;
                $hitung++;
            }
            return round($total/$hitung);
        }

        return 0;
    }

    public function namaLengkap(){
        return ucwords($this->nama_depan . ' ' . $this->nama_belakang);
    }
}
