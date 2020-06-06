<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use App\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;
use App\Imports\SiswaImport;


// mengugnakan package export
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = Siswa::where('nama_depan', 'LIKE', "%$request->cari%")
                            ->orWhere('nama_belakang', 'LIKE', "%$request->cari%")
                            ->paginate(10);
        }else{
            $data_siswa = Siswa::paginate(25);
        }
        return view('backend.siswa.index', [
            'data_siswa' => $data_siswa
        ]);
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
        // return "form di submit";
        // dd($_POST);
        // var_dump($_POST);
        // exit();
        // return $request;

        // validasi sebelum di input
        $this->validate($request, [
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'jk' => 'required',
            'agama' => 'required',
            'avatar' => 'mimes:jpeg,jpg,png,gif',

        ]);
        
        // untuk menambah akun user siswa
        $user = new User;
        $user->role =  'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = Str::random(60);
        $user->save(); 
        
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());

        // cek apakah avatar sudah di upload
        if($request->hasFile('avatar')){
            $request->file('avatar')
                    ->move('images/avatar', $request->file('avatar')
                        ->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')
                                    ->getClientOriginalName();
            $siswa->save();
        }

        return redirect()
            ->route('siswa.index')
            ->with('status', 'Siswa baru telah di registrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        dd($siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        // $siswa = Siswa::findOrFail($id );
        // dd($siswa);
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        // dd($request->all());
        // $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        // cek apakah avatar sudah di upload
        if($request->hasFile('avatar')){
            $request->file('avatar')
                    ->move('images/avatar', $request->file('avatar')
                        ->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')
                                    ->getClientOriginalName();
            $siswa->save();
        }

        return redirect()
            ->route('siswa.index')
            ->with('status', 'Data '. $siswa->nama_depan .' telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        // $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('hapus', 'Data '. $siswa->nama_depan .' telah dihapus');
    }

    // public function profile($id){
    public function profile(Siswa $siswa){
        // return "profil siswa";
        // $siswa = Siswa::findOrFail($id);

        // dd($siswa);

        $mp = Mapel::all();

        // menyiapkan data untuk chart
        $categories = [];
        $nilai = [];

        foreach($mp as $mapel){
            if($siswa->mapel()->wherePivot('mapel_id', $mapel->id)->first()){
                $categories[] = $mapel->nama;
                $nilai[] = $siswa->mapel()->wherePivot('mapel_id', $mapel->id)->first()->pivot->nilai;
            }
        }

        // dd($nilai);
        // dd($categories);

        return view('backend.siswa.profile', [
            'siswa' => $siswa,
            'mp' => $mp,
            'categories' => $categories,
            'nilai' => $nilai,
        ]);
    }

    public function addNilai(Request $request, Siswa $siswa){
        // return 'ini nilai' . $id;
        // dd($request->all());
        // $siswa = Siswa::findOrFail($idSiswa);
        // menambahkan nilai ke tabel vipot

        // cek apakah nilai sudah di input pada mapel milik si siswa
        if($siswa->mapel()->where('mapel_id', $request->mapel)->exists()){
            return redirect()->route('siswa.profile', [$siswa])->with('alert', 'Nilai sudah ada sebelumnya');
        }

        $siswa->mapel()->attach($request->mapel, [
            'nilai' => $request->nilai,
        ]);
        
        return redirect()->route('siswa.profile', [$siswa])->with('status', 'Nilai Berhasil di tambah');
    }
    
    // export to excel
    public function export(){
        return Excel::download(new SiswaExport, 'LaporanSiswa.xlsx');
    }

    // export to pdf
    public function exportPdf(){
        // $pdf = PDF::loadView('pdf.invoice', $data);
        $siswa = Siswa::all();
        // $pdf = PDF::loadHTML('<h1>Data Siswa</h1>');
        $pdf = PDF::loadView('export.siswapdf',[
            'siswa' => $siswa,
        ]);
        return $pdf->download('siswa.pdf');
        // return $pdf->stream();
    }

    public function myprofile(){
        // return 'ini profile siswa/i';
        $akun = auth()->user()->siswa;
        return view('akun-siswa.profile', [
            'akun' => $akun
        ]);
    }

    public function importexcel(Request $request){
        Excel::import(new SiswaImport, $request->file('importsiswa'));
        // dd($request->all());
    }


}
