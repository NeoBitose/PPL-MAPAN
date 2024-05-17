<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejala';
    protected $primaryKey = 'id_gejala';
    protected $fillable = ['gejala', 'klasifikasi_gejala_id'];
    public $timestamps = false;
}
