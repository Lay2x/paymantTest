<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftarans';
    protected $primaryKey = 'id_daftar';
    public $timestamps = true;
    protected $fillable = [
        'no_telp',
        'tanggal_daftar',
        'status',
        'id_user',
        'id_paket'
    ];

}
