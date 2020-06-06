<?php

use App\Siswa;
use App\Guru;

// custom helper secara global
function rangkingLimaBesar(){
    // mendapatkan urutan nilai 5 besar
    $siswa = Siswa::all();
    $siswa->map(function($s){
        $s->nilaiRata = $s->nilaiRata();
        return $s;
    });
    $siswa = $siswa->sortByDesc('nilaiRata')->take(5);

    return $siswa;
}

// cek apakah fungsi ada atau gak ada
if(!function_exists('totalSiswa')){
    function totalSiswa(){
        return Siswa::count();
    }
}

if(!function_exists('totalGuru')){
    function totalGuru(){
        return Guru::count();
    }
}