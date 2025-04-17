@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h3 class="card-title text-center text-primary fw-bold">Form Input Paket</h3>
                        <hr>

                        {{-- Form Input Paket --}}
                        <form class="custom-validation" action="{{ route('simpanPengirim') }}" method="POST">
                            @csrf

                            {{-- Nama Barang --}}
                            <div class="mb-3">
                                <label class="fw-bold">Nama Barang</label>
                                <input type="text" id="namaBarang" name="namaBarang" class="form-control" required placeholder="Masukkan Nama Penerima">
                            </div>
                            
                            {{-- Jenis Barang --}}
                            <div class="mb-3">
                                <label class="fw-bold">Jenis Barang</label>
                                <select id="jenisBarang" name="jenisBarang" class="form-select" required>
                                    <option value="" disabled selected>Pilih Jenis</option>
                                    <option value="Elektronik">Elektronik</option>
                                    <option value="Farmasi">Farmasi</option>
                                    <option value="Makanan atau Minuman">Makanan atau Minuman</option>
                                    <option value="Kosmetik">Kosmetik</option>
                                    <option value="Otomotif">Otomotif</option>
                                </select>
                            </div>

                            {{-- Alamat Awal --}}
                            <div class="mb-3">
                                <label class="fw-bold">Alamat Awal</label>
                                <input type="text" id="alamatAwal" name="alamatAwal" class="form-control" required placeholder="Masukkan Nama Penerima">
                            </div>

                            {{-- Alamat Akhir --}}
                            <div class="mb-3">
                                <label class="fw-bold">Alamat Akhir</label>
                                <input type="text" id="alamatAkhir" name="alamatAkhir" class="form-control" required placeholder="Masukkan Nama Penerima">
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <a href="home" class="btn btn-secondary">
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