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

                            {{-- No Resi --}}
                            <div class="mb-3">
                                <label class="fw-bold">No. Resi</label>
                                <input type="number" id="noresi" name="noresi" class="form-control" required 
                                    placeholder="Masukkan No. Resi" value="{{ old('noresi', $dataTrack->noresi) }}">
                            </div>

                            {{-- Waktu --}}
                            <div class="mb-3">
                                <label class="fw-bold">Waktu</label>
                                <input type="datetime-local" id="waktu" name="waktu" class="form-control" required
                                    value="{{ old('waktu', $dataTrack->waktu) }}">
                            </div>

                            {{-- Lokasi --}}
                            <div class="mb-3">
                                <label class="fw-bold">Lokasi</label>
                                <input type="text" id="lokasi" name="lokasi" class="form-control" required
                                    placeholder="Lokasi Saat Ini" value="{{ old('lokasi', $dataTrack->lokasi) }}">
                            </div>

                            {{-- Status --}}
                            <div class="mb-3">
                                <label class="fw-bold">Status</label>
                                <select name="status" class="form-select" required>
                                    <option value="Dalam Pengiriman" {{ old('status', $dataTrack->status) == 'Dalam Pengiriman' ? 'selected' : '' }}>Dalam Pengiriman</option>
                                    <option value="Tiba di Tujuan" {{ old('status', $dataTrack->status) == 'Tiba di Tujuan' ? 'selected' : '' }}>Tiba di Tujuan</option>
                                    <option value="Gagal Dikirim" {{ old('status', $dataTrack->status) == 'Gagal Dikirim' ? 'selected' : '' }}>Gagal Dikirim</option>
                                </select>
                            </div>

                            {{-- Tujuan --}}
                            <div class="mb-3">
                                <label class="fw-bold">Tujuan</label>
                                <input type="text" id="tujuan" name="tujuan" class="form-control" required
                                    placeholder="Alamat Tujuan" value="{{ old('tujuan', $dataTrack->tujuan) }}">
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
