<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKurir extends Model
{
    use HasFactory;
    protected $table = "DataKurir";   
    protected $primaryKey = "IDKurir";
    protected $fillable = [
        'NamaKurir',
        'PlatNomor',
        'AreaTugas',
        'NoTelephone'
    ];
}
