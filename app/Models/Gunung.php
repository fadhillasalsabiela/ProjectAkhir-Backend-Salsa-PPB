<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    use HasFactory;
    protected $table = 'gunungs';
    protected $fillable = [
        'nama_gunung',
        'id_kategori',
        'gambar',
        'deskripsi',
        'imgmaps'

    ];
}
