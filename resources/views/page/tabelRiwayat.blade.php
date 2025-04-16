@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Aktivitas</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.5.3/dist/forms.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">

  <!-- Container utama -->
  <div class="max-w-6xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">Riwayat Aktivitas Pengguna</h1>

    <!-- Filter dan Pencarian -->
    <div class="flex items-center justify-between mb-6">
      <div class="flex space-x-4">
        <input type="text" placeholder="Cari Aktivitas..." class="px-4 py-2 w-80 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        <select class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <option value="">Pilih Status</option>
          <option value="berhasil">Berhasil</option>
          <option value="gagal">Gagal</option>
          <option value="selesai">Selesai</option>
        </select>
      </div>
      <button class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        Filter
      </button>
    </div>

    <!-- Card Riwayat -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
        <div class="flex justify-between items-center mb-4">
          <p class="text-sm text-gray-500">15 April 2025</p>
          <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Berhasil</span>
        </div>
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Login ke Sistem</h3>
        <p class="text-gray-600">Pengguna berhasil login menggunakan kredensial yang valid.</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
        <div class="flex justify-between items-center mb-4">
          <p class="text-sm text-gray-500">14 April 2025</p>
          <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Selesai</span>
        </div>
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Mengunduh Laporan</h3>
        <p class="text-gray-600">Laporan berhasil diunduh dan disimpan di perangkat pengguna.</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
        <div class="flex justify-between items-center mb-4">
          <p class="text-sm text-gray-500">13 April 2025</p>
          <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">Gagal</span>
        </div>
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Gagal Login</h3>
        <p class="text-gray-600">Pengguna gagal login karena kesalahan password.</p>
      </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center">
      <nav aria-label="Pagination">
        <ul class="inline-flex items-center space-x-2">
          <li><a href="#" class="px-4 py-2 text-gray-600 bg-white border rounded-lg shadow hover:bg-gray-100">«</a></li>
          <li><a href="#" class="px-4 py-2 text-gray-600 bg-white border rounded-lg shadow hover:bg-gray-100">1</a></li>
          <li><a href="#" class="px-4 py-2 text-gray-600 bg-white border rounded-lg shadow hover:bg-gray-100">2</a></li>
          <li><a href="#" class="px-4 py-2 text-gray-600 bg-white border rounded-lg shadow hover:bg-gray-100">3</a></li>
          <li><a href="#" class="px-4 py-2 text-gray-600 bg-white border rounded-lg shadow hover:bg-gray-100">»</a></li>
        </ul>
      </nav>
    </div>
  </div>

</body>
</html>
@endsection
