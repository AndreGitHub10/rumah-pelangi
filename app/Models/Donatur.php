<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';
    protected $primaryKey = 'id_donatur';
    
    protected $fillable = [
        'id_donatur',
        'nama_donatur',
        'alamat',
        'no_hp',
        'total_donasi'
    ];
}
