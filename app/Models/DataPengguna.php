<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengguna extends Model
{
    use HasFactory;
    protected $table = "DataPengguna";   
    protected $primaryKey = "IDPengguna";
    protected $fillable = [
        'NamaPengguna',
        'NoHp',
        'email',
        'Alamat'
    ];
}
