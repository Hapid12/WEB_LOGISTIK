<?php

namespace App\Http\Controllers;


use App\Models\dataPengirim;
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

     // Simpan data tracking
     public function storePengirim(Request $request)
     {
         $request->validate([
             'kodePengiriman' => 'required|string',
             'namaPengirim' => 'required|string',
             'jenisBarang' => 'required|string',
             'status' => 'required|string',
             'alamatAwal' => 'required|string',
             'alamatAkhir' => 'required|string'
         ]);
 
         dataPengirim::create([
             'kodePengiriman' => $request->kodePengiriman,
             'namaPengirim' => $request->namaPengirim,
             'jenisBarang' => $request->jenisBarang,
             'status' => $request->status,
             'alamatAwal' => $request->alamatAwal,
             'alamatAkhir' => $request->alamatAkhir
         ]);
 
         return redirect('dataPengirim')->with('success', 'Data berhasil disimpan!');
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
