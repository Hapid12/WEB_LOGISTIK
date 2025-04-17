<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPengirim extends Model
{
    use HasFactory;
    protected $table = "dataPengirim";   
    protected $primaryKey = "id";
    protected $fillable = [
        'noresi',
        'namaBarang',
        'jenisBarang',
        'status',
        'alamatAwal',
        'alamatAkhir'
    ];
}
