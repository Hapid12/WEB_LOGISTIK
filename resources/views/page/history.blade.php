@extends('layout')

@section('content')

{{-- Tabel Data --}}
<div class="bg-white rounded-xl shadow p-6">
  <h2 class="text-xl font-semibold mb-4">History</h2>
  <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200 text-sm">
          <tbody class="text-gray-800">
              {{-- Tabel Data Tracking --}}
              <div class="table-responsive">
                <table id="datatable" class="table table-striped table-hover table-bordered align-middle text-center"
                 style="border-collapse: separate; border-spacing: 0 8px;">
                    <thead class="table-dark">
                        <tr style="border-radius: 10px;">
                            <th>Kode Pemesanan</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Status</th>
                            <th>Alamat Awal</th>
                            <th>Alamat Akhir</th>
                            <th class="rounded-top-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data_Track as $item)
                            <tr>
                                <td>{{ $item->kodePemesanan }}</td>
                                <td>{{ $item->namaBarang }}</td>
                                <td>{{ $item->jenisBarang }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->alamatAwal }}</td>
                                <td>{{ $item->alamatAkhir }}</td>
                                <td>
                                    <a href="{{ route('editTrack', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ route('hapusTrack', $item->id) }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach --}}
          </tbody>
      </table>
  </div>
</div>
@endsection
