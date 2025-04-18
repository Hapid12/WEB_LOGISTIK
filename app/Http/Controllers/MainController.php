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
            'pengirim' => dataPengirim::all()
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
            'pengirim' => dataPengirim::all() // ambil semua data pengirim
        ];

        return view('page\tracking', $data);
    }

    // Cari Tracking
    public function cariTracking(Request $request)
    {
        $request->validate([
            'kodePemesanan' => 'required|string'
        ]);

        $kode = $request->input('kodePemesanan');
        $data = dataPengirim::where('kodePengiriman', $kode)->get();

        if ($data->isEmpty()) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.')->with('searched', true);
        }

        return view('page/tracking', [
            'pengirim' => $data,
            'title' => "Hasil Tracking untuk Kode: $kode",
            'searched' => true // kirim flag pencarian
        ]);
    }


    // Fungsi untuk model tarif harga
    public function tarifHarga()
    {
        $data = [
            'title' => 'Tarif Harga',
            'pengirim' => dataPengirim::all()
        ];
        return view('page\tarifHarga', $data);
    }

    // fungsi tabel riwayat
    public function history()
    {
        $data = [
            'title' => 'History',
            'pengirim' => dataPengirim::all()
        ];
        return view('page\history', $data);
    }

    // fungsi edit di history
    public function editHistory($id)
    {
        $pengirim = dataPengirim::findOrFail($id);
        $title = "Edit Data Pengirim";
        return view('page.editHistory', compact('pengirim', 'title'));
    }


    public function updateHistory(Request $request, $id)
    {
        $request->validate([
            'kodePengiriman' => 'required|string',
            'namaPengirim' => 'required|string',
            'jenisBarang' => 'required|string',
            'status' => 'required|string',
            'alamatAwal' => 'required|string',
            'alamatAkhir' => 'required|string'
        ]);

        $pengirim = dataPengirim::findOrFail($id);
        $pengirim->update([
            'kodePengiriman' => $request->kodePengiriman,
            'namaPengirim' => $request->namaPengirim,
            'jenisBarang' => $request->jenisBarang,
            'status' => $request->status,
            'alamatAwal' => $request->alamatAwal,
            'alamatAkhir' => $request->alamatAkhir
        ]);

        return redirect()->route('history')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroyHistory($id)
    {
        $pengirim = dataPengirim::findOrFail($id);
        $pengirim->delete();

        return redirect()->back()->with('success', 'Data pengiriman berhasil dihapus.');
    }
}
