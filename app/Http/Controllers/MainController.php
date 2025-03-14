<?php

namespace App\Http\Controllers;

use App\Models\DataPaket;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // fungsi home
    function home(){
        $data = array(
            'title' => 'Home',

        );
        return view('page/home', $data);
    }

    // fungsi data paket
    function dataPaket(){
        $data = array(
            'title' => 'Data Paket',

        );
        $data_Paket = DataPaket::all();
        return view('page/dataPaket', compact('data_Paket'), $data);
    }

    // fungsi untuk form tambah data paket
    function dataPaketProses(){
        $data = array(
            'title' => 'Kirim Data Paket',

        );
        return view('page/dataPaketProses', $data);
    }

    // fungsi untuk menyimpan data paket
    public function storePaket(Request $request){
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
    function destroyPaket($id){
        $data_Paket = DataPaket::find($id);

        if($data_Paket){
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

    // fungsi tracking history
    function trackingHistory(){
        $data = array(
            'title' => 'Tracking History',

        );
        return view('page/trackingHistory', $data);
    }

    // fungsi untuk form tambah tracking history
    function trackingHistoryProses(){
        $data = array(
            'title' => 'Kirim Tracking History',

        );
        return view('page/trackingHistoryProses', $data);
    }

    // fungsi data kurir
    function dataKurir(){
        $data = array(
            'title' => 'Data Kurir',

        );
        return view('page/dataKurir', $data);
    }

    // fungsi form tambah data kurir
    function dataKurirProses(){
        $data = array(
            'title' => 'Kirim Data Kurir',

        );
        return view('page/dataKurirProses', $data);
    }

    // fungsi data pengguna
    function dataPengguna(){
        $data = array(
            'title' => 'Data Pengguna',

        );
        return view('page/dataPengguna', $data);
    }

    // fungsi form tambah data pengguna
    function dataPenggunaProses(){
        $data = array(
            'title' => 'Kirim Data Pengguna',

        );
        return view('page/dataPenggunaProses', $data);
    }

    // fungsi data gudang
    function dataGudang(){
        $data = array(
            'title' => 'Data Gudang',

        );
        return view('page/dataGudang', $data);
    }

    // fungsi tarif pengiriman
    function tarifPengiriman(){
        $data = array(
            'title' => 'Tarif Pengiriman',

        );
        return view('page/tarifPengiriman', $data);
    }
    
}
