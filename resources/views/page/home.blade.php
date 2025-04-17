@extends('layout')

@section('content')
<div class="min-h-screen bg-[#f9fafb] text-gray-800 font-sans">
    <div class="max-w-7xl mx-auto p-6">

        {{-- Header --}}
        <div class="mb-10 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-[#1f2937]">📦 Dashboard Logistik</h1>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
                <a href="/dataPaket">
                Tambah Pengiriman Baru
            </a>
            </button>
        </div>

        {{-- Kartu Statistik --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-12">
            <div class="bg-white shadow-md rounded-xl p-6 border-t-4 border-indigo-500">
                <h2 class="text-sm text-gray-500 uppercase mb-2">Total Pengiriman</h2>
                <p class="text-3xl font-bold text-gray-900">1.250</p>
            </div>
            <div class="bg-white shadow-md rounded-xl p-6 border-t-4 border-yellow-400">
                <h2 class="text-sm text-gray-500 uppercase mb-2">Dalam Perjalanan</h2>
                <p class="text-3xl font-bold text-gray-900">315</p>
            </div>
            <div class="bg-white shadow-md rounded-xl p-6 border-t-4 border-green-500">
                <h2 class="text-sm text-gray-500 uppercase mb-2">Terkirim</h2>
                <p class="text-3xl font-bold text-gray-900">930</p>
            </div>
        </div>

        {{-- Notifikasi --}}
        <div class="bg-white rounded-xl shadow p-6 mb-10">
            <h2 class="text-lg font-semibold mb-4">🔔 Notifikasi Terbaru</h2>
            <ul class="space-y-2 text-sm text-gray-700">
                <li class="bg-blue-50 px-4 py-2 rounded-md border-l-4 border-blue-500">📦 Paket <strong>TRK123456</strong> tiba di <strong>Jakarta</strong></li>
                <li class="bg-yellow-50 px-4 py-2 rounded-md border-l-4 border-yellow-500">⚠️ Paket <strong>TRK999999</strong> mengalami keterlambatan</li>
                <li class="bg-green-50 px-4 py-2 rounded-md border-l-4 border-green-500">✅ Paket <strong>TRK789012</strong> berhasil terkirim</li>
            </ul>
        </div>

        {{-- Form Lacak Resi --}}
        <div class="bg-white rounded-xl shadow p-6 mb-10">
            <form class="flex flex-col md:flex-row gap-4 items-center">
                <input type="text" placeholder="Masukkan nomor resi..." class="w-full md:flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
                <button type="button" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">
                    Lacak
                </button>
            </form>
        </div>

        {{-- Grafik Dummy --}}
        <div class="bg-white rounded-xl shadow p-6 mb-10">
            <h2 class="text-lg font-semibold mb-4">📈 Statistik Mingguan</h2>
            <img src="https://fakeimg.pl/600x250/?text=Grafik%20Statistik&font=lobster" alt="Grafik Kiriman" class="rounded-md">
        </div>

        {{-- Tabel Data --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">📄 Pengiriman Terbaru</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-2 text-left">No Resi</th>
                            <th class="px-4 py-2 text-left">Nama Penerima</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Lokasi Terakhir</th>
                            <th class="px-4 py-2 text-left">Waktu Update</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 font-mono">TRK123456</td>
                            <td class="px-4 py-3">Budi Santoso</td>
                            <td class="px-4 py-3 text-yellow-600 font-semibold">Dalam Perjalanan</td>
                            <td class="px-4 py-3">Jakarta</td>
                            <td class="px-4 py-3">10 April 2025, 09:42</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 font-mono">TRK789012</td>
                            <td class="px-4 py-3">Siti Aminah</td>
                            <td class="px-4 py-3 text-green-600 font-semibold">Terkirim</td>
                            <td class="px-4 py-3">Surabaya</td>
                            <td class="px-4 py-3">10 April 2025, 08:15</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 font-mono">TRK345678</td>
                            <td class="px-4 py-3">Joko Widodo</td>
                            <td class="px-4 py-3 text-red-600 font-semibold">Gagal Dikirim</td>
                            <td class="px-4 py-3">Bandung</td>
                            <td class="px-4 py-3">10 April 2025, 07:50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>~

    </div>
</div>
@endsection
~