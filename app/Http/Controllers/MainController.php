<?php

namespace App\Http\Controllers;

use App\Models\DataPaket;
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
            'noResi' => 'required|integer',
            'pengirim' => 'required|string',
            'penerima' => 'required|string',
            'asal' => 'required|string',
            'tujuan' => 'required|string',
            'status' => 'required|string',
            'tanggalUpdate' => 'required|string',
            'estimasiTiba' => 'required|string'

        ]);

        DataPaket::create([
            'noResi' => $request->noResi,
            'pengirim' => $request->pengirim,
            'penerima' => $request->penerima,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'status' => $request->status,
            'tanggalUpdate' => $request->tanggalUpdate,
            'estimasiTiba' => $request->estimasiTiba
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
            'noResi' => 'required|integer',
            'pengirim' => 'required|string',
            'penerima' => 'required|string',
            'asal' => 'required|string',
            'tujuan' => 'required|string',
            'status' => 'required|string',
            'tanggalUpdate' => 'required|string',
            'estimasiTiba' => 'required|string'
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
            'noresi' => 'required|integer',
            'waktu' => 'required|date',
            'lokasi' => 'required|string',
            'status' => 'required|string',
            'tujuan' => 'required|string'
        ]);

        TrackingHistory::create([
            'noresi' => $request->noresi,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
            'tujuan' => $request->tujuan,
        ]);

        return redirect()->route('trackingHistory')->with('success', 'Data berhasil disimpan!');
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
            return view('page.editDataTrack', [
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
            'noresi' => 'required|integer',
            'waktu' => 'required|date',
            'lokasi' => 'required|string',
            'status' => 'required|string',
            'tujuan' => 'required|string'
        ]);

        $data_Track = TrackingHistory::find($id);

        if ($data_Track) {
            $data_Track->update($validatedData);
            return redirect()->route('trackingHistory')->with('success', 'Data berhasil diperbarui!');
        }

        return redirect()->route('trackingHistory')->with('error', 'Data tidak ditemukan!');
    }
}
