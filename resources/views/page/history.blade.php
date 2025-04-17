@extends('layout')

@section('content')

{{-- Tabel Data --}}
<div class="bg-white rounded-xl shadow p-6">
    <h2 class="text-xl font-semibold mb-4">History</h2>
    <div class="overflow-x-auto">
        <table id="datatable" class="min-w-full divide-y divide-gray-200 text-sm text-center table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">Kode Pemesanan</th>
                    <th class="px-4 py-2">Nama Barang</th>
                    <th class="px-4 py-2">Jenis Barang</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Alamat Awal</th>
                    <th class="px-4 py-2">Alamat Akhir</th>
                    <th class="px-4 py-2">Aksi</th>
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

{{-- DataTables CDN --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            responsive: true,
            language: {
                lengthMenu: 'Tampilkan _MENU_ data per halaman',
                zeroRecords: 'Data tidak ditemukan',
                info: 'Menampilkan halaman _PAGE_ dari _PAGES_',
                infoEmpty: 'Tidak ada data yang tersedia',
                search: 'Cari:',
                paginate: {
                    next: 'Selanjutnya',
                    previous: 'Sebelumnya'
                }
            }
        });
    });
</script>
@endsection
