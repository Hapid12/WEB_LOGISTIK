@extends('layout')

@section('content')

{{-- Tabel Data --}}
<div class="bg-white rounded-xl shadow p-6">
    <h2 class="text-xl font-semibold mb-4">History</h2>
    <div class="table-responsive">
        <table id="datatable" class="table table-striped table-hover table-bordered align-middle text-center"
            style="border-collapse: separate; border-spacing: 0 8px;">
            <thead class="table-dark">
                <tr>
                    <th>Kode Pengiriman</th>
                    <th>Nama Pengirim</th>
                    <th>Jenis Barang</th>
                    <th>Status</th>
                    <th>Alamat Awal</th>
                    <th>Alamat Akhir</th>
                    <th class="rounded-top-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengirim as $item)
                    <tr>
                        <td>{{ $item->kodePengiriman }}</td>
                        <td>{{ $item->namaPengirim }}</td>
                        <td>{{ $item->jenisBarang }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->alamatAwal }}</td>
                        <td>{{ $item->alamatAkhir }}</td>
                    </tr>
                @endforeach
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
