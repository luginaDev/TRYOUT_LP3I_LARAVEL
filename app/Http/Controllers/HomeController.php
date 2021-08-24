<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Krs;
use App\Mahasiswa;
use App\Matkul;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =  KRS::with('Matkul', 'Mahasiswa')->get();
        //return dd($data);
        return view('home', compact('data'));
       
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matkul =  Matkul::all();
        return view('addkrs', compact('mahasiswa', 'matkul') );
    }
}
