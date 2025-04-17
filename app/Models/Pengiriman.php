<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = "data_Pengiriman";
    protected $primaryKey = "id";

    protected $fillable = [
        'noresi',
        'nama_penerima',
        'alamat_penerima',
        'berat',
        'tujuan',
        'layanan',
        'total_harga'
    ];

    // Fungsi hitungHarga
    public function hitungHarga()
    {
        $tarifDasar = 10000;
        $tarifPerKg = 5000;

        // Tambahan biaya berdasarkan tujuan
        if ($this->tujuan == 'luar_kota') {
            $tarifDasar += 5000;
        }

        // Tambahan biaya berdasarkan layanan
        if ($this->layanan == 'kilat') {
            $tarifDasar += 10000;
        }

        return $tarifDasar + ($this->berat * $tarifPerKg);
    }

    // Accessor for formatted price
    public function getHargaFormattedAttribute()
    {
        return 'Rp ' . number_format($this->total_harga, 0, ',', '.');
    }

    // Status options for dropdowns or validation
    public static function statusOptions()
    {
        return [
            'Dalam Pengiriman' => 'Dalam Pengiriman',
            'Tiba di Tujuan' => 'Tiba di Tujuan',
            'Dibatalkan' => 'Dibatalkan'
        ];
    }
}
