<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\rombel;



class RombelController extends Controller
{
    public function index(){

    $data = DB::table('tbl_rombel')->get();
    return view('rombel.index')->with('data2',$data);
    }
}
