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
        $dataPengirim = dataPengirim::all();
        return view('page/dataPengirim', compact('dataPengirim'), $data);
    }


    // fungsi untuk form tambah data Pengirim
    function dataPengirimanProses()
    {
        $data = array(
            'title' => 'Kirim Data Paket',

        );
        return view('page/dataPengirim', $data);
    }

    // fungsi untuk menyimpan data Pengirim
    public function storePaket(Request $request)
    {
        $request->validate([
            'noresi' => 'required|string',
            'namaBarang' => 'required|string',
            'jenisBarang' => 'required|string',
            'status' => 'nullable|string',
            'alamatAwal' => 'required|string',
            'alamatAkhir' => 'required|string',

        ]);

        dataPengirim::create([
            'noresi' => $request->noresi,
            'namaBarang' => $request->namaBarang,
            'jenisBarang' => $request->jenisBarang,
            'status' => $request->jenisBarang,
            'alamatAwal' => $request->jenisBarang,
            'alamatAkhir' => $request->jenisBarang,
        ]);
        return redirect('dataPengirim');
    }

    // fungsi untuk menhapus data Pengirim
    function destroyPengirim($id)
    {
        $dataPengirim = dataPengirim::find($id);

        if ($dataPengirim) {
            $dataPengirim->delete();
            return redirect()->route('dataPengirim')->with('succes', 'data berhasil dihapus!');
        }
        return redirect()->route('dataPengirim')->with('error', 'data tidak ditemukan');
    }

    // fungsi untuk mengedit data Pengirim
    public function editPengirim($id)
    {
        $dataPengirim = dataPengirim::find($id);

        if ($dataPengirim) {
            $data = [
                'title' => 'Edit Data Pengirim',
                'formTitle' => 'Edit Data Pengirim',
                'dataPengirim' => $dataPengirim
            ];
            return view('page/editDataPengirim', $data);
        }

        return redirect()->route('dataPengirim')->with('error', 'Data tidak ditemukan!');
    }

    // fungsi untuk update data Pengirim
    public function updatePengirim(Request $request, $id)
    {
        $validatedData = $request->validate([
            'noresi' => 'required|string',
            'namaBarang' => 'required|string',
            'jenisBarang' => 'required|string',
            'status' => 'nullable|string',
            'alamatAwal' => 'required|string',
            'alamatAkhir' => 'required|string',
        ]);

        $dataPengirim = dataPengirim::find($id);

        if ($dataPengirim) {
            $dataPengirim->update($validatedData);
            return redirect()->route('dataPengirim')->with('success', 'Data berhasil diperbarui!');
        }

        return redirect()->route('dataPengirim')->with('error', 'Data tidak ditemukan!');
    }


    // Menampilkan data tracking 
    public function tracking()
    {
        $data = [
            'title' => 'Tracking',
        ];
        return view('page.tracking', $data);
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
