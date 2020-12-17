<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produktivitas_Perkebunan extends Model
{
    use HasFactory;

    protected $table = 'Produktivitas_Perkebunan';

    protected $fillable = ['tahun','kecamatan_id','tanaman_perkebunan_id','nilai '];
}
