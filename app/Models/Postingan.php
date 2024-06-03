<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;
    protected $table = 'postingan';
    protected $primaryKey = 'id_postingan';
    protected $fillable = ['judul_postingan', 'deskripsi', 'tgl_upload', 'gambar_postingan', 'active_nonactive', 'users_id'];
    public $timestamps = false;
}
