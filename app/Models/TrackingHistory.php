<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingHistory extends Model
{
    use HasFactory;
    protected $table = "TrackingHistory";   
    protected $primaryKey = "no.resi";
    protected $fillable = [
        'Waktu',
        'Lokasi',
        'Status'
    ];
}
