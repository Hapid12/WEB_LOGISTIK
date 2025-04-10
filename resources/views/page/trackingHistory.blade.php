@extends('layout')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h1 class="card-title text-center text-primary fw-bold">{{ $title }}</h1>
                        <hr>

                        {{-- Tombol Tambah Data --}}
                        <div class="d-flex justify-content-end mb-3">
                            <a class="btn btn-success" href="{{ route('trackingHistoryProses') }}">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>

                        {{-- Tabel Data Tracking --}}
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover table-bordered align-middle text-center"
                             style="border-collapse: separate; border-spacing: 0 8px;">
                                <thead class="table-dark">
                                    <tr style="border-radius: 10px;">
                                        <th>No. Resi</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Tujuan</th>
                                        <th>Status</th>
                                        <th class="rounded-top-end">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_Track as $item)
                                        <tr>
                                            <td>{{ $item->noresi }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->waktu)->format('d-m-Y H:i') }}</td>
                                            <td>{{ $item->lokasi }}</td>
                                            <td>{{ $item->tujuan }}</td>
                                            <td>
                                                <span class="badge 
                                                    {{ $item->status == 'Dalam Pengiriman' ? 'bg-warning' : ($item->status == 'Tiba di Tujuan' ? 'bg-success' : 'bg-danger') }}">
                                                    {{ $item->status }}
                                                </span>
                                            </td>
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div> {{-- End Table Responsive --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Border untuk semua sisi td dan th */
     #datatable th, #datatable td {
         border: 1px solid #dee2e6;  /* Warna garis abu soft */
     }
 
     /* Header lebih tebal dan rapi */
     #datatable thead th {
         background-color: #1e293b;  /* Dark grey (bisa diganti sesuai selera) */
         color: white;
         border-bottom: 2px solid #dee2e6;
         vertical-align: middle;
     }
 
     /* Hover row efek */
     #datatable tbody tr:hover {
         background-color: #f1f5f9;  /* Hover warna soft */
     }
 
     /* Biar cell gak terlalu dempet */
     #datatable td, #datatable th {
         padding: 12px 8px;
     }
 
     /* Responsive biar ga mepet */
     .table-responsive {
         overflow-x: auto;
     }
     </style>

    {{-- DataTables Script --}}
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ada data yang tersedia",
                    "search": "Cari:",
                    "paginate": {
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endsection
