<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    // fungsi Pengiriman
    function Pengiriman()
    {
        $data = array(
            'title' => 'Data Pengiriman',

        );
        $data_Pengiriman = Pengiriman::all();
        return view('page/pengiriman', compact('data_Pengiriman'), $data);
    }

    // fungsi untuk form tambah data paket
    function pengirimanProses()
    {
        $data = array(
            'title' => 'Kirim Data Pengiriman',

        );
        return view('page/pengirimanProses', $data);
    }

    // fungsi untuk menyimpan data pengiriman
    public function storePengiriman(Request $request)
    {
        $request->validate([
            'noresi' => 'required|integer',
            'penerima' => 'required|string',
            'tujuan' => 'required|string',
            'layanan' => 'required|string',
            'berat' => 'required|integer',

        ]);

        $pengiriman = Pengiriman::create([
            'noresi' => $request->noresi,
            'penerima' => $request->penerima,
            'tujuan' => $request->tujuan,
            'layanan' => $request->layanan,
            'berat' => $request->berat,
            // 'total_harga' => $request->total_harga
        ]);

        if ($pengiriman) {
            return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
        }
        return redirect()->back()->with('error', 'Data gagal ditambahkan.');
    }


    // fungsi untuk menhapus data paket
    function destroyPengiriman($id)
    {
        $data_Pengiriman = Pengiriman::find($id);

        if ($data_Pengiriman) {
            $data_Pengiriman->delete();
            return redirect()->route('pengiriman')->with('succes', 'data berhasil dihapus!');
        }
        return redirect()->route('pengiriman')->with('error', 'data tidak ditemukan');
    }

    // fungsi untuk mengedit data paket
    public function editPengiriman($id)
    {
        $data_Pengiriman = Pengiriman::find($id);

        if ($data_Pengiriman) {
            $data = [
                'title' => 'Edit Data Pengirim',
                'formTitle' => 'Edit Data Pengirim',
                'dataPengirim' => $data_Pengiriman
            ];
            return view('page/editPengiriman', $data);
        }

        return redirect()->route('pengiriman')->with('error', 'Data tidak ditemukan!');
    }

    // fungsi untuk update data paket
    public function updatePengiriman(Request $request, $id)
    {
        $validatedData = $request->validate([
            'noresi' => 'required|integer',
            'penerima' => 'required|string',
            'tujuan' => 'required|string',
            'layanan' => 'required|string',
            'berat' => 'required|integer',
            // 'total_harga' => 'required|float'
        ]);

        $data_Pengiriman = Pengiriman::find($id);

        if ($data_Pengiriman) {
            $data_Pengiriman->update($validatedData);
            return redirect()->route('pengiriman')->with('success', 'Data berhasil diperbarui!');
        }

        return redirect()->route('pengiriman')->with('error', 'Data tidak ditemukan!');
    }
}
