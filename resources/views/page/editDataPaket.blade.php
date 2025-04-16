@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary fw-bold">{{ $formTitle }}</h3>
                        <hr>

                        {{-- Notifikasi Error --}}
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Form Edit Paket --}}
                        <form action="{{ route('updatePaket', $dataPaket->id) }}" method="post">
                            @csrf

                            {{-- Nama Barang --}}
                            <div class="mb-3">
                                <label class="fw-bold">Nama Barang</label>
                                <input type="text" id="namaBarang" name="namaBarang" class="form-control" required
                                    placeholder="Nama Barang" value="{{ old('namaBarang', $dataPaket->namaBarang) }}">
                            </div>

                            {{-- Penerima --}}
                            <div class="mb-3">
                                <label class="fw-bold">Jenis Barang</label>
                                <input type="text" id="jenisBarang" name="jenisBarang" class="form-control" required
                                    placeholder="Jenis Barang" value="{{ old('jenisBarang', $dataPaket->jenisBarang) }}">
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dataPaket') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
