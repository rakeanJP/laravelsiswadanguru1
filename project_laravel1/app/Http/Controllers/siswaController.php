<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\rakean;

class siswaController extends Controller
{
    public function index(){
        $a = 5;
        $b = 7;
        $hasil = $a *$b;
        $data = DB::table('tbl_siswa')->get();
        $data2 = rakean::get();
        return view('siswa.index')->with('perkalian',$hasil)->with('data',$data)
        ->with('data2',$data2);
    }
}
