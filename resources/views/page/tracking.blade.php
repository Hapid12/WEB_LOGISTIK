@extends('layout')

@section('content')

<!-- FORM INPUT -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-body">

                    @if (session()->has('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <h3 class="card-title text-center text-primary fw-bold">Form Input Tracking</h3>
                    <hr>

                    <form action="{{ route('tracking.cari') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="fw-bold">Kode Pemesanan</label>
                            <input type="text" name="kodePemesanan" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TABEL HASIL -->
@if(isset($searched) && $pengirim && count($pengirim) > 0)
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-body">
                    <h1 class="card-title text-center text-primary fw-bold">{{ $title }}</h1>
                    <hr>

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover table-bordered align-middle text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>Kode Pengiriman</th>
                                    <th>Nama Pengirim</th>
                                    <th>Jenis Barang</th>
                                    <th>Status</th>
                                    <th>Alamat Awal</th>
                                    <th>Alamat Akhir</th>
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
            </div>
        </div>
    </div>
</div>
@endif

<!-- DATATABLE STYLING -->
<style>
    #datatable th, #datatable td {
        border: 1px solid #dee2e6;
    }

    #datatable thead th {
        background-color: #1e293b;
        color: white;
        vertical-align: middle;
    }

    #datatable tbody tr:hover {
        background-color: #f1f5f9;
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>

<!-- DATATABLE SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            searching: false,
            paging: true,
            info: true,
            ordering: false,
            language: {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Data tidak ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data yang tersedia",
                "paginate": {
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>

@endsection
