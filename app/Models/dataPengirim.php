<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPengirim extends Model
{
    use HasFactory;
    protected $table = "data_pengirim";   
    protected $primaryKey = "id";
    protected $fillable = [
        'kodePengiriman',
        'namaPengirim',
        'jenisBarang',
        'status',
        'alamatAwal',
        'alamatAkhir'
    ];
}
