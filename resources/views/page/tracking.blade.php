@extends('layout')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-body">
                    @if ($errors->any())
                                <div class="col-12">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            @if (session()->has('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            @if (session()->has('success'))
                                    <div class="alert alert-info">{{ session('success') }}</div>
                            @endif
                    <h3 class="card-title text-center text-primary fw-bold">Form Input Tracking</h3>
                    <hr>

                    {{-- Form Input Tracking --}}
                    <form class="custom-validation" action="{{route('simpanTrack')}}" method="POST">
                        @csrf

                        {{-- Kode Pemesanan --}}
                        <div class="mb-3">
                            <label class="fw-bold">Kode Pemesanan</label>
                            <input type="text" id="kodePemesanan" name="kodePemesanan" class="form-control" required>
                        </div>

                        {{-- Tombol Aksi --}}
                            <button type="submit" class="btn btn-primary"> Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h1 class="card-title text-center text-primary fw-bold">{{ $title }}</h1>
                        <hr>

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
