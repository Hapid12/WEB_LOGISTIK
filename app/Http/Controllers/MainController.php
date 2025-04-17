<?php

namespace App\Http\Controllers;

use App\Models\DataPaket;
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
            'noResi' => $request->noResi,
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

    // Fungsi untuk model pengirim
    public function pengiriman()
    {
        $data = [
            'title' => 'Pengirim',
        ];

        $data_Pengiriman = Pengiriman::latest()->get();
        return view('page\pengiriman', compact('data_Pengiriman'), $data);
    }

    // Simpan Pengiriman
    public function simpanPengiriman(Request $request)
    {
        $validated = $request->validate([
            'noresi' => 'required|string|max:255|unique:data_Pengiriman,noresi',
            'nama_penerima' => 'required|string|max:255',
            'alamat_penerima' => 'required|string|max:500',
            'berat' => 'required|numeric|min:0.1|max:100',
            'tujuan' => 'required|in:dalam_kota,luar_kota',
            'layanan' => 'required|in:reguler,kilat'
        ]);

        try {
            $pengiriman = new Pengiriman();
            $pengiriman->fill($validated);
            $pengiriman->status = 'Dalam Pengiriman'; // Set default status
            $pengiriman->total_harga = $this->calculatePrice(
                $pengiriman->berat,
                $pengiriman->tujuan,
                $pengiriman->layanan
            );

            $pengiriman->save();

            return redirect()->route('pengiriman')
                ->with('success', 'Pengiriman berhasil ditambahkan! No. Resi: ' . $pengiriman->noresi);
        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Gagal menyimpan: ' . $e->getMessage());
        }
    }

    private function calculatePrice($berat, $tujuan, $layanan)
    {
        $tarifDasar = 10000;
        $tarifPerKg = 5000;

        if ($tujuan == 'luar_kota') $tarifDasar += 5000;
        if ($layanan == 'kilat') $tarifDasar += 10000;

        return $tarifDasar + ($berat * $tarifPerKg);
    }

    // Form tambah Pengiriman
    public function pengirimanProses()
    {
        return view('page/pengirimanProses', ['title' => 'Kirim Pengiriman']);
    }

    // Hapus data Pengiriman
    public function destroyPengiriman($id)
    {
        $data_Pengiriman = Pengiriman::find($id);

        if ($data_Pengiriman) {
            $data_Pengiriman->delete();
            return redirect()->route('pengiriman')->with('success', 'Data berhasil dihapus!');
        }

        return redirect()->route('pengiriman')->with('error', 'Data tidak ditemukan');
    }

    // Edit data Pengiriman
    public function editPengiriman($id)
    {
        $data_Pengiriman = Pengiriman::find($id); // Bukan TrackingHistory

        if (!$data_Pengiriman) {
            return redirect()->route('pengiriman')
                ->with('error', 'Data tidak ditemukan!');
        }

        return view('page.editPengiriman', [
            'title' => 'Edit Data Pengiriman',
            'formTitle' => 'Edit Data Pengiriman',
            'dataPengiriman' => $data_Pengiriman,
            'tujuanOptions' => ['dalam_kota' => 'Dalam Kota', 'luar_kota' => 'Luar Kota'],
            'layananOptions' => ['reguler' => 'Reguler', 'kilat' => 'Kilat'],
            'statusOptions' => [
                'Dalam Pengiriman' => 'Dalam Pengiriman',
                'Tiba di Tujuan' => 'Tiba di Tujuan',
                'Dibatalkan' => 'Dibatalkan'
            ]
        ]);
    }

    // Update data Pengiriman
    public function updatePengiriman(Request $request, $id)
    {
        // Validasi data - sama dengan fungsi simpanPengiriman plus status
        $validatedData = $request->validate([
            'noresi' => 'required|string|max:255|unique:data_Pengiriman,noresi,' . $id,
            'nama_penerima' => 'required|string|max:255',
            'alamat_penerima' => 'required|string',
            'berat' => 'required|numeric|min:0.1',
            'tujuan' => 'required|in:dalam_kota,luar_kota',
            'layanan' => 'required|in:reguler,kilat',
            'status' => 'required|in:Dalam Pengiriman,Tiba di Tujuan,Dibatalkan'
        ], [
            'noresi.unique' => 'Nomor resi sudah digunakan oleh pengiriman lain',
            'berat.min' => 'Berat minimal harus 0.1 kg'
        ]);

        try {
            // Cari data pengiriman
            $pengiriman = Pengiriman::findOrFail($id);

            // Update data
            $pengiriman->fill($validatedData);

            // Hitung ulang total harga
            $pengiriman->total_harga = $pengiriman->hitungHarga();

            $pengiriman->save();

            return redirect()
                ->route('pengiriman')
                ->with('success', 'Data pengiriman ' . $pengiriman->noresi . ' berhasil diperbarui!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()
                ->route('pengiriman')
                ->with('error', 'Data pengiriman tidak ditemukan!');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
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
}
