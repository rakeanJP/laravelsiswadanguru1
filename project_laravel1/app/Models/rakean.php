<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rakean extends Model
{
    protected $table = 'tbl_siswa';
    protected $primarykey = 'nis';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'nis','nama', 'jk','rayon'
    ];
}
