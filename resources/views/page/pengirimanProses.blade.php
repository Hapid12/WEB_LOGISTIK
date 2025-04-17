@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary fw-bold">Form Input Pengiriman Baru</h3>
                        <hr>

                        <form action="{{ route('simpanPengiriman') }}" method="POST">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger mb-4">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- No. Resi -->
                            <div class="mb-3">
                                <label class="fw-bold">No. Resi <span class="text-danger">*</span></label>
                                <input type="text" name="noresi" class="form-control" 
                                       value="{{ old('noresi') }}" 
                                       required 
                                       placeholder="Contoh: RESI-001">
                                <small class="text-muted">Nomor resi harus unik</small>
                            </div>

                            <!-- Nama Penerima -->
                            <div class="mb-3">
                                <label class="fw-bold">Nama Penerima <span class="text-danger">*</span></label>
                                <input type="text" name="nama_penerima" class="form-control" 
                                       value="{{ old('nama_penerima') }}" 
                                       required 
                                       placeholder="Contoh: Budi Santoso">
                            </div>

                            <!-- Alamat Penerima -->
                            <div class="mb-3">
                                <label class="fw-bold">Alamat Lengkap <span class="text-danger">*</span></label>
                                <textarea name="alamat_penerima" class="form-control" rows="3" required
                                          placeholder="Contoh: Jl. Merdeka No. 12, Jakarta Pusat">{{ old('alamat_penerima') }}</textarea>
                            </div>

                            <!-- Berat Paket -->
                            <div class="mb-3">
                                <label class="fw-bold">Berat (kg) <span class="text-danger">*</span></label>
                                <input type="number" name="berat" class="form-control" 
                                       value="{{ old('berat') }}" 
                                       step="0.1" min="0.1" 
                                       required 
                                       placeholder="Contoh: 1.5">
                                <small class="text-muted">Minimal 0.1 kg</small>
                            </div>

                            <!-- Tujuan Pengiriman -->
                            <div class="mb-3">
                                <label class="fw-bold">Tujuan <span class="text-danger">*</span></label>
                                <select name="tujuan" class="form-select" required>
                                    <option value="" disabled {{ !old('tujuan') ? 'selected' : '' }}>Pilih Tujuan</option>
                                    <option value="dalam_kota" {{ old('tujuan') == 'dalam_kota' ? 'selected' : '' }}>Dalam Kota</option>
                                    <option value="luar_kota" {{ old('tujuan') == 'luar_kota' ? 'selected' : '' }}>Luar Kota</option>
                                </select>
                            </div>

                            <!-- Jenis Layanan -->
                            <div class="mb-3">
                                <label class="fw-bold">Layanan <span class="text-danger">*</span></label>
                                <select name="layanan" class="form-select" required>
                                    <option value="" disabled {{ !old('layanan') ? 'selected' : '' }}>Pilih Layanan</option>
                                    <option value="reguler" {{ old('layanan') == 'reguler' ? 'selected' : '' }}>Reguler</option>
                                    <option value="kilat" {{ old('layanan') == 'kilat' ? 'selected' : '' }}>Kilat</option>
                                </select>
                            </div>

                            <!-- Status (hidden) -->

                            <!-- Tombol Aksi -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('pengiriman') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i> Simpan Pengiriman
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-control, .form-select {
            border-radius: 0.5rem;
            padding: 0.75rem;
        }
        .card {
            border: none;
        }
        .alert-danger {
            border-radius: 0.5rem;
        }
    </style>
@endsection