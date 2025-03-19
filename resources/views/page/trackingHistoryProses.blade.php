@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary fw-bold">Form Input Tracking</h3>
                        <hr>

                        {{-- Form Input Tracking --}}
                        <form class="custom-validation" action="{{ route('simpanTrack') }}" method="POST">
                            @csrf

                            {{-- No Resi --}}
                            <div class="mb-3">
                                <label class="fw-bold">No. Resi</label>
                                <input type="text" id="noresi" name="noresi" class="form-control" required placeholder="Masukkan No. Resi">
                            </div>

                            {{-- Waktu --}}
                            <div class="mb-3">
                                <label class="fw-bold">Waktu</label>
                                <input type="datetime-local" id="waktu" name="waktu" class="form-control" required>
                            </div>

                            {{-- Lokasi --}}
                            <div class="mb-3">
                                <label class="fw-bold">Lokasi</label>
                                <textarea id="lokasi" name="lokasi" class="form-control" rows="3" required placeholder="Masukkan Lokasi"></textarea>
                            </div>

                            {{-- Tujuan --}}
                            <div class="mb-3">
                                <label class="fw-bold">Tujuan</label>
                                <input type="text" id="tujuan" name="tujuan" class="form-control" required placeholder="Masukkan Tujuan">
                            </div>

                            {{-- Status --}}
                            <div class="mb-3">
                                <label class="fw-bold">Status</label>
                                <select id="status" name="status" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                    <option value="Tiba di Tujuan">Tiba di Tujuan</option>
                                    <option value="Gagal Dikirim">Gagal Dikirim</option>
                                </select>
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dataPaket') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
