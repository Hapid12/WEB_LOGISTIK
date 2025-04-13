@extends('layout')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-body">
                    <h1 class="card-title text-center text-primary fw-bold">Riwayat Pengiriman</h1>
                    <hr>

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover table-bordered align-middle text-center"
                            style="border-collapse: separate; border-spacing: 0 8px;">
                            <thead class="table-dark">
                                <tr>
                                    <th>No. Resi</th>
                                    <th>Waktu</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Tujuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_Track as $item)
                                    <tr>
                                        <td>{{ $item->noresi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->waktu)->format('d-m-Y H:i') }}</td>
                                        <td>{{ $item->lokasi }}</td>
                                        <td>
                                            <span class="badge 
                                                {{ $item->status == 'Dalam Pengiriman' ? 'bg-warning' : ($item->status == 'Tiba di Tujuan' ? 'bg-success' : 'bg-danger') }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                        <td>{{ $item->tujuan }}</td>
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
    #datatable th, #datatable td {
        border: 1px solid #dee2e6;
        padding: 12px 8px;
    }

    #datatable thead th {
        background-color: #1e293b;
        color: white;
        border-bottom: 2px solid #dee2e6;
    }

    #datatable tbody tr:hover {
        background-color: #f1f5f9;
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Data tidak ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data tersedia",
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
