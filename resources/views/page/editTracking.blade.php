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

                        {{-- Form Edit Tracking --}}
                        <form action="{{ route('updateTrack', $dataTrack->id) }}" method="post">
                            @csrf

                            {{-- Layanan --}}
                        <div class="mb-3">
                            <label class="fw-bold">Layanan</label>
                            <select id="layanan" name="layanan" class="form-select" required>
                                <option value="" disabled selected>Pilih Layanan</option>
                                <option value="Udara" {{ $dataTrack->layanan == 'Udara' ? 'selected' : '' }}>Udara</option>
                                <option value="Laut" {{ $dataTrack->layanan == 'Laut' ? 'selected' : '' }}>Laut</option>
                                <option value="Darat" {{ $dataTrack->layanan == 'Darat' ? 'selected' : '' }}>Darat</option>
                            </select>
                        </div>

                        {{-- Waktu pengiriman--}}
                        <div class="mb-3">
                            <label class="fw-bold">Waktu Pengiriman</label>
                            <input type="date" id="waktuPengiriman" name="waktuPengiriman" class="form-control" value="{{ old('waktuPengiriman', $dataTrack->waktuPengiriman) }}" required>
                        </div>

                        {{-- Estimasi Tiba --}}
                        <div class="mb-3">
                            <label class="fw-bold">Estimasi Tiba</label>
                            <input type="date" id="estimasiTiba" name="estimasiTiba" class="form-control" value="{{ old('estimasiTiba', $dataTrack->estimasiTiba) }}" required>
                        </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('trackingHistory') }}" class="btn btn-secondary">
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
