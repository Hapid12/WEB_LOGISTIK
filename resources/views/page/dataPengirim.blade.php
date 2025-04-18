@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body p-4">
                        <h3 class="card-title text-center text-primary fw-bold mb-4">
                            <i class="fas fa-box-open me-2"></i>Form Input Paket
                        </h3>

                        @if (session('success'))
                            <div class="alert alert-success mb-3">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('simpanPengirim') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold"><i class="fas fa-barcode me-1"></i>Kode
                                        Pengiriman</label>
                                    <input type="text" class="form-control" name="kodePengiriman"
                                        placeholder="Masukkan No. Resi" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold"><i class="fas fa-user me-1"></i>Nama
                                        Pengirim</label>
                                    <input type="text" class="form-control" name="namaPengirim"
                                        placeholder="Masukkan Nama Pengirim" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold"><i class="fas fa-cubes me-1"></i>Jenis
                                        Barang</label>
                                    <select class="form-select" name="jenisBarang" required>
                                        <option value="" selected disabled>Pilih Jenis</option>
                                        <option value="Elektronik">Elektronik</option>
                                        <option value="Farmasi">Farmasi</option>
                                        <option value="Makanan atau Minuman">Makanan atau Minuman</option>
                                        <option value="Kosmetik">Kosmetik</option>
                                        <option value="Otomotif">Otomotif</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold"><i
                                            class="fas fa-info-circle me-1"></i>Status</label>
                                    <select class="form-select" name="status" required>
                                        <option value="" selected disabled>Pilih Status</option>
                                        <option value="Dalam Pengiriman">Dalam Pengiriman</option>
                                        <option value="Belum Dikirim">Belum Dikirim</option>
                                        <option value="Sudah Sampai">Sudah Sampai</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold"><i class="fas fa-map-marker-alt me-1"></i>Alamat
                                        Awal</label>
                                    <select class="form-select" name="alamatAwal" required>
                                        <option value="" selected disabled>Pilih Provinsi / Ibu Kota</option>
                                        {{-- Daftar provinsi --}}
                                        <option value="Aceh">Banda Aceh (Aceh)</option>
                                        {{-- ... lanjut seperti sebelumnya --}}
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold"><i class="fas fa-map-pin me-1"></i>Alamat
                                        Akhir</label>
                                    <select class="form-select" name="alamatAkhir" required>
                                        <option value="" selected disabled>Pilih Provinsi / Ibu Kota</option>
                                        {{-- Daftar provinsi --}}
                                        <option value="Aceh">Banda Aceh (Aceh)</option>
                                        {{-- ... lanjut seperti sebelumnya --}}
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ url('home') }}" class="btn btn-outline-secondary px-4">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="fas fa-save me-2"></i>Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
