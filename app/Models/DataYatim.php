<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataYatim extends Model
{
    use HasFactory;
    protected $table = 'data_yatim';

    protected $fillable = [
    	'id', 'nama_anak', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'no_hp'
    ];
}
