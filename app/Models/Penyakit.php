<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = 'penyakit';
    protected $primaryKey = 'id_penyakit';
    protected $fillable = ['nama_penyakit', 'definisi', 'pengendalian_teknis', 'pengendalian_gejala', 'foto_penyakit'];
    public $timestamps = false;
}
