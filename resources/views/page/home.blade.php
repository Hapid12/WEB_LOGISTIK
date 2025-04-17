@extends('layout')

@section('content')
<div class="min-h-screen bg-[#f9fafb] text-gray-800 font-sans">
    <div class="max-w-7xl mx-auto p-6">

        {{-- Header --}}
        <div class="mb-10 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-[#1f2937]">📦 Dashboard Logistik</h1>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
                <a href="/">
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

        {{-- Tabel Data --}}
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">📄 Pengiriman Terbaru</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="px-4 py-2 text-center">No Resi</th>
                            <th class="px-4 py-2 text-center">Nama Barang</th>
                            <th class="px-4 py-2 text-center">Jenis Barang</th>
                            <th class="px-4 py-2 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        {{-- @foreach ($data_Paket as $item)
                        <tr>
                            <td>{{ $item->noresi }}</td>
                            <td>{{ $item->namaBarang }}</td>
                            <td>{{ $item->jenisBarang }}</td> 
                            <td>{{ $item->status }}</td> 
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
