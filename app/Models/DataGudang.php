<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGudang extends Model
{
    use HasFactory;
    protected $table = "DataGudang";   
    protected $primaryKey = "IDGudang";
    protected $fillable = [
        'NamaGudang',
        'Lokasi',
        'Kapasitas'
    ];
}
