<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_GejalaPenyakit extends Model
{
    use HasFactory;
    protected $table = 'gejala_penyakit';
    protected $primaryKey = 'id_gejala_penyakit';
    protected $fillable = ['gejala_id', 'penyakit_id'];
    public $timestamps = false;
}
