<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{

    use SoftDeletes;

    protected $table = 'berita';

    // instansi dari carbon
    protected $dates = ['created_at'];

    protected $fillable = [
        'judul',
        'konten',
        'slug',
        'thumbnail'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }


    // cek apakah ada thumbnail atau kgk
    public function thumbnail(){
        //  if($this->thumbnail){
        //      return $this->thumbnail;
        //  }else{
        //      return asset('images/thumbnail.jpg');
        //  }

        if(!$this->thumbnail){
            return asset('images/thumbnail.jpg');
        }

        return $this->thumbnail;
    }
}
