@extends('layout')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h1 class="card-title text-center text-primary fw-bold">Informasi Pengiriman</h1>
                        <hr>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ route('pengirimanProses') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>
                        {{-- Tabel Pengiriman --}}
                        <div class="table-responsive">
                            <table id="datatable"
                                class="table table-striped table-hover table-bordered align-middle text-center"
                                style="border-collapse: separate; border-spacing: 0 8px;">
                                <thead class="table-dark">
                                    <tr style="border-radius: 10px;">
                                        <th>No. Resi</th>
                                        <th>Nama Penerima</th>
                                        <th>Alamat</th>
                                        <th>Tujuan</th>
                                        <th>Layanan</th>
                                        <th>Berat (kg)</th>
                                        <th>Total Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_Pengiriman as $item)
                                        <tr>
                                            <td>{{ $item->noresi }}</td>
                                            <td>{{ $item->nama_penerima }}</td>
                                            <td>{{ Str::limit($item->alamat_penerima, 30) }}</td>
                                            <td>{{ $item->tujuan == 'dalam_kota' ? 'Dalam Kota' : 'Luar Kota' }}</td>
                                            <td>{{ ucfirst($item->layanan) }}</td>
                                            <td>{{ number_format($item->berat, 2) }}</td>
                                            <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a href="{{ route('pengiriman.edit', $item->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('pengiriman.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Hapus data ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
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
        #datatable th,
        #datatable td {
            border: 1px solid #dee2e6;
        }

        #datatable thead th {
            background-color: #1e293b;
            color: white;
            border-bottom: 2px solid #dee2e6;
            vertical-align: middle;
        }

        #datatable tbody tr:hover {
            background-color: #f1f5f9;
        }

        #datatable td,
        #datatable th {
            padding: 12px 8px;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>

    {{-- DataTables Script --}}
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
                        "targets": [7]
                    } // Disable sorting for action column
                ]
            });
        });
    </script>
@endsection
