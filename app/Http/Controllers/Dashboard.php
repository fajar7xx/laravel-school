<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class Dashboard extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        

        // dd($siswa);
        return view('backend.dashboard');
    }
}
