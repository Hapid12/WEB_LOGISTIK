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
                            <table id="datatable" class="table table-striped table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No. Resi</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Tujuan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_Track as $item)
                                        <tr>
                                            <td>{{ $item->noResi }}</td>
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
