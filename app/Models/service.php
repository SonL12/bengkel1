<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'Service';

    protected $fillable = [
        'id_service',
        'id_kendaraan',
        'keluhan',
        'id_mekanik',
        'tgl_masuk',
        'tgl_keluar',
        'id_jns_service',
    ];
}
