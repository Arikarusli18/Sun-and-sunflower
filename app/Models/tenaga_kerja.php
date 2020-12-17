<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenaga_kerja extends Model
{
    use HasFactory;

    
    protected $table = 'Tenaga_Kerja';

    protected $fillable = ['tahun','kecamatan_id','tanaman_perkebunan_id','nilai '];
}