<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_KlasifikasiGejala extends Model
{
    use HasFactory;
    protected $table = 'klasifikasi_gejala';
    protected $primaryKey = 'id_klasifikasi_gejala';
    protected $fillable = ['nama_bagian'];
    public $timestamps = false;
}
