<?php

namespace App\Http\Controllers;

use App\Models\DataPaket;
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

    // fungsi data paket
    function dataPaket()
    {
        $data = array(
            'title' => 'Data Paket',

        );
        $data_Paket = DataPaket::all();
        return view('page/dataPaket', compact('data_Paket'), $data);
    }

    // fungsi untuk form tambah data paket
    function dataPaketProses()
    {
        $data = array(
            'title' => 'Kirim Data Paket',

        );
        return view('page/dataPaketProses', $data);
    }

    // fungsi untuk menyimpan data paket
    public function storePaket(Request $request)
    {
        $request->validate([
            'namaBarang' => 'required|string',
            'jenisBarang' => 'required|string'

        ]);

        DataPaket::create([
            'namaBarang' => $request->namaBarang,
            'jenisBarang' => $request->jenisBarang,
        ]);
        return redirect('dataPaket');
    }

    // fungsi untuk menhapus data paket
    function destroyPaket($id)
    {
        $data_Paket = DataPaket::find($id);

        if ($data_Paket) {
            $data_Paket->delete();
            return redirect()->route('dataPaket')->with('succes', 'data berhasil dihapus!');
        }
        return redirect()->route('dataPaket')->with('error', 'data tidak ditemukan');
    }

    // fungsi untuk mengedit data paket
    public function editPaket($id)
    {
        $data_Paket = DataPaket::find($id);

        if ($data_Paket) {
            $data = [
                'title' => 'Edit Data Paket',
                'formTitle' => 'Edit Data Paket',
                'dataPaket' => $data_Paket
            ];
            return view('page/editDataPaket', $data);
        }

        return redirect()->route('dataPaket')->with('error', 'Data tidak ditemukan!');
    }

    // fungsi untuk update data paket
    public function updatePaket(Request $request, $id)
    {
        $validatedData = $request->validate([
            'namaBarang' => 'required|string',
            'jenisBarang' => 'required|string'
        ]);

        $data_Paket = DataPaket::find($id);

        if ($data_Paket) {
            $data_Paket->update($validatedData);
            return redirect()->route('dataPaket')->with('success', 'Data berhasil diperbarui!');
        }

        return redirect()->route('dataPaket')->with('error', 'Data tidak ditemukan!');
    }

    // Menampilkan data tracking history
    public function trackingHistory()
    {
        $data = [
            'title' => 'Tracking History',
        ];
        $data_Track = TrackingHistory::latest()->get(); // Ambil data terbaru duluan

        return view('page.trackingHistory', compact('data_Track'), $data);
    }

    // Form tambah tracking history
    public function trackingHistoryProses()
    {
        return view('page.trackingHistoryProses', ['title' => 'Kirim Tracking History']);
    }

    // Simpan data tracking
    public function storeTrack(Request $request)
    {
        $request->validate([
            'layanan' => 'required|string',
            'waktuPengiriman' => 'required|date',
            'estimasiTiba' => 'required|date'
        ]);

        TrackingHistory::create([
            'layanan' => $request->layanan,
            'waktuPengiriman' => $request->waktuPengiriman,
            'estimasiTiba' => $request->estimasiTiba
        ]);

        return redirect('trackingHistory')->with('success', 'Data berhasil disimpan!');
    }

    // Hapus data tracking
    public function destroyTrack($id)
    {
        $data_Track = TrackingHistory::find($id);

        if ($data_Track) {
            $data_Track->delete();
            return redirect()->route('trackingHistory')->with('success', 'Data berhasil dihapus!');
        }

        return redirect()->route('trackingHistory')->with('error', 'Data tidak ditemukan');
    }

    // Edit data tracking
    public function editTrack($id)
    {
        $data_Track = TrackingHistory::find($id);

        if ($data_Track) {
            return view('page.editTracking', [
                'title' => 'Edit Data Tracking',
                'formTitle' => 'Edit Data Tracking',
                'dataTrack' => $data_Track
            ]);
        }

        return redirect()->route('trackingHistory')->with('error', 'Data tidak ditemukan!');
    }

    // Update data tracking
    public function updateTrack(Request $request, $id)
    {
        $validatedData = $request->validate([
            'layanan' => 'required|string',
            'waktuPengiriman' => 'required|date',
            'estimasiTiba' => 'required|date'
        ]);

        $data_Track = TrackingHistory::find($id);

        if ($data_Track) {
            $data_Track->update($validatedData);
            return redirect()->route('trackingHistory')->with('success', 'Data berhasil diperbarui!');
        }

        return redirect()->route('trackingHistory')->with('error', 'Data tidak ditemukan!');
    }

    // Fungsi untuk model tarif harga
    public function tarifHarga()
    {
        $data = [
            'title' => 'Tarif Harga',
        ];

        $data_Track = TrackingHistory::latest()->get();
        return view('page\tarifHarga', compact('data_Track'), $data);
    }

    // fungsi tabel riwayat
    public function tabelRiwayat()
    {
        $data = [
            'title' => 'Riwayat Pengguna',
        ];

        $data_Track = TrackingHistory::latest()->get();
        return view('page\tabelRiwayat', compact('data_Track'), $data);
    }


    function uas()
    {
        $data = array(
            'title' => 'uas',

        );
        return view('page/uas', $data);
    }

    public function storeUas(Request $request)
    {
        $request->validate([
            'nomorkelompok' => 'required|integer',
            'namaAnggota' => 'required|string',
            'jobdesk' => 'required|string'

        ]);

        Kelompok::create([
            'nomorkelompok' => $request->nomorKelompok,
            'namaAnggota' => $request->namaAnggota,
            'jobdesk' => $request->jobdesk
        ]);
        return redirect('uas');
    }
}
