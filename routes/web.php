<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@index');
Route::get('daftar', 'SiteController@daftar');
Route::post('daftar', 'SiteController@registrasiSiswa')->name('daftar');


// khusus kirim email
// testing
// Route::get('kirimemail', function(){
//     \Mail::raw('Konfirmasi registrasi siswa baru', function($message){
//         $message->from('regis@mail.com', 'REgistrasi');
//         $message->sender('regis@mail.com', 'REgistrasi');

//         $message->to('fajar@mail.com', 'fajar siagian');

//         $message->replyTo('regis@mail.com', 'REgistrasi');

//         $message->subject('Pendaftaran Siswa');
//     });
// });

Route::get('login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('logout', 'AuthController@logout')->name('logout');


// authentiaction secara grouping biar gak capek
Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){
    Route::get('siswa/exportpdf', 'SiswaController@exportPdf')->name('siswa.exportpdf');
    Route::get('siswa/export', 'SiswaController@export')->name('siswa.export');
    Route::post('siswa/import', 'SiswaController@importexcel')->name('siswa.import');
    // Route::get('siswa/{id}/profile/', 'SiswaController@profile')->name('siswa.profile');
    // Route::post('siswa/{id}/addnilai/', 'SiswaController@addNilai')->name('siswa.addnilai');

    // route model binding namanya harus sama dengan objek
    Route::get('siswa/{siswa}/profile/', 'SiswaController@profile')->name('siswa.profile');
    Route::post('siswa/{siswa}/addnilai/', 'SiswaController@addNilai')->name('siswa.addnilai');

    Route::resource('siswa', 'SiswaController');

    // guru
    Route::get('guru/{id}/profile', 'GuruController@profile')->name('guru.profile');
    Route::resource('guru', 'GuruController');

    // berita
    Route::resource('berita', 'BeritaController');
});

// untuk siswa dan admin
Route::group(['middleware' => ['auth', 'CheckRole:admin,siswa']], function(){
    Route::get('dashboard', 'Dashboard')->name('dashboard');
});


// untuk siswa aja
Route::group(['middleware' => ['auth', 'CheckRole:siswa']], function(){
    Route::get('myprofile', 'SiswaController@myprofile')->name('myprofile');
});


Route::get('berita/{slug}', [
    'uses' => 'SiteController@beritaSingle',
    'as' => 'berita.detail'
]);