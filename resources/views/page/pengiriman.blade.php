@extends('layout')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h1 class="card-title text-center text-primary fw-bold">Data Pengiriman</h1>
                        <hr>

                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{ route('pengirimanProses') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No. Resi</th>
                                        <th>Penerima</th>
                                        <th>Tujuan</th>
                                        <th>Layanan</th>
                                        <th>Berat (kg)</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_Pengiriman as $item)
                                        <tr>
                                            <td>{{ $item->noresi }}</td>
                                            <td>{{ $item->penerima }}</td>
                                            <td>{{ $item->tujuan }}</td>
                                            <td>{{ $item->layanan }}</td>
                                            <td>{{ $item->berat }}</td>

                                            <td>
                                                <a href="{{ route('editPengiriman', $item->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>

                                                {{-- Tombol Hapus --}}
                                                <a href="{{ route('hapusPengiriman', $item->id) }}"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #datatable th {
            white-space: nowrap;
        }

        #datatable td {
            vertical-align: middle;
        }

        .badge {
            font-size: 0.85em;
            padding: 0.35em 0.65em;
        }
    </style>

    <script>
        $(document).ready(function() {
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
                },
                "columnDefs": [{
                        "orderable": false,
                        "targets": [8]
                    }, // Kolom aksi
                    {
                        "type": "num-fmt",
                        "targets": [4, 5, 6, 7]
                    } // Kolom numerik
                ],
                "order": [
                    [0, "desc"]
                ] // Urutkan berdasarkan No. Resi terbaru
            });
        });
    </script>
@endsection
