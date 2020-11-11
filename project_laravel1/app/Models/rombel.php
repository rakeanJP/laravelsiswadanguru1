<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rombel extends Model
{
    protected $table = 'tbl_rombel';
    protected $primarykey = 'id_rombel';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'id_rombel','nama_rombel','tingkat_kelas'
    ];
}
