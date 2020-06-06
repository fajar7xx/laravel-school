<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Mail\NotifPendaftaranSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Siswa;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('frontend.pages.index', compact([
            'berita',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // return 'ini disini ada pendaftaran';

        $this->validate($request, [
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'kelamin' => 'required',
            'agama' => 'required',
            'pass' => 'required|min:8',
            'alamat' => 'required',
        ]);
        
        // untuk menambah akun user siswa
        $user = new User;
        $user->role =  'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->pass);
        $user->remember_token = Str::random(60);
        $user->save(); 
        
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());

        return redirect('/');

        // ubah nnti ke halaman terima kasih telah mendaftar
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function daftar(){
        return view('frontend.pages.daftar');
    }

    public function beritaSingle($slug){
        // return 'ini berita lengkapnya';

        $berita = Berita::where('slug', '=', $slug)->first();
        // dd($berita);
        return view('frontend.pages.beritadetail', compact([
            'berita',
        ]));
    }

    public function registrasiSiswa(Request $request){
        $user = new User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->pass);
        $user->remember_token = Str::random(80);

        $user->save();

        $request->request->add([
            'user_id' => $user->id
        ]);

        $siswa = Siswa::create($request->all());

        // konfigruasi email
        // \Mail::raw('Selamat datang ' .$siswa->nama_depan, function($message) use($siswa, $user){
        //     $message->to($user->email, $siswa->nama_depan);
        //     $message->subject('Selamat anda sudah terdaftar di sekolah kami');
        // });

        \Mail::to($user->email)->send(new NotifPendaftaranSiswa);

        // return redirect()->with('sukses', 'data pendaftaran berhasil dikirm');
        
    }
}
