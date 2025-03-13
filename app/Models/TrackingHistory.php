<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingHistory extends Model
{
    use HasFactory;
    protected $table = "data_Track";   
    protected $primaryKey = "id";
    protected $fillable = [
        'noResi',
        'waktu',
        'lokasi',
        'status',
        'tujuan'
    ];
}
