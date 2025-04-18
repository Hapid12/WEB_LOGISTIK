<?php

namespace App\Http\Controllers;

use App\Models\DataPaket;
use App\Models\dataPengirim;
use App\Models\Kelompok;
use App\Models\Pengiriman;
use App\Models\TrackingHistory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    // fungsi home
    function home()
    {
        $data = array(
            'title' => 'Home',

        );
        return view('page/home', $data);
    }

    // fungsi data Pengirim
    function dataPengirim()
    {
        $data = array(
            'title' => 'Data Pengirim',

        );
        return view('page/dataPengirim', $data);
    }

    // Menampilkan data tracking 
    public function tracking()
    {
        $data = [
            'title' => 'tracking',
        ];
        return view('page\tracking', $data);
    }

    // Fungsi untuk model tarif harga
    public function tarifHarga()
    {
        $data = [
            'title' => 'Tarif Harga',
        ];
        return view('page\tarifHarga', $data);
    }

    // fungsi tabel riwayat
    public function history()
    {
        $data = [
            'title' => 'History',
        ];
        return view('page\history', $data);
    }
}
