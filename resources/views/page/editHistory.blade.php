@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card border-0 shadow rounded-4">
                <div class="card-body p-4">
                    <h3 class="card-title text-center text-warning fw-bold mb-4">
                        <i class="fas fa-edit me-2"></i>Edit Data Pengiriman
                    </h3>

                    <form action="{{ route('updateHistory', $pengirim->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold"><i class="fas fa-barcode me-1"></i>Kode Pengiriman</label>
                                <input type="text" class="form-control" name="kodePengiriman" value="{{ old('kodePengiriman', $pengirim->kodePengiriman) }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold"><i class="fas fa-user me-1"></i>Nama Pengirim</label>
                                <input type="text" class="form-control" name="namaPengirim" value="{{ old('namaPengirim', $pengirim->namaPengirim) }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold"><i class="fas fa-cubes me-1"></i>Jenis Barang</label>
                                <select class="form-select" name="jenisBarang" required>
                                    <option value="" disabled>Pilih Jenis</option>
                                    @foreach(['Elektronik', 'Farmasi', 'Makanan atau Minuman', 'Kosmetik', 'Otomotif'] as $jenis)
                                        <option value="{{ $jenis }}" {{ $pengirim->jenisBarang == $jenis ? 'selected' : '' }}>{{ $jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold"><i class="fas fa-info-circle me-1"></i>Status</label>
                                <select class="form-select" name="status" required>
                                    <option value="" disabled>Pilih Status</option>
                                    @foreach(['Dalam Pengiriman', 'Belum Dikirim', 'Sudah Sampai'] as $status)
                                        <option value="{{ $status }}" {{ $pengirim->status == $status ? 'selected' : '' }}>{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold"><i class="fas fa-map-marker-alt me-1"></i>Alamat Awal</label>
                                <select class="form-select" name="alamatAwal" required>
                                    <option value="" disabled>Pilih Provinsi / Ibu Kota</option>
                                    @foreach(['Aceh', 'Bandung', 'Bogor', 'Malang', 'Tanggerang', 'Banyuwangi'] as $prov)
                                        <option value="{{ $prov }}" {{ $pengirim->alamatAwal == $prov ? 'selected' : '' }}>{{ $prov }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold"><i class="fas fa-map-pin me-1"></i>Alamat Akhir</label>
                                <select class="form-select" name="alamatAkhir" required>
                                    <option value="" disabled>Pilih Provinsi / Ibu Kota</option>
                                    @foreach(['Aceh', 'Bandung', 'Bogor', 'Malang', 'Tanggerang', 'Banyuwangi'] as $prov)
                                        <option value="{{ $prov }}" {{ $pengirim->alamatAkhir == $prov ? 'selected' : '' }}>{{ $prov }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ url('home') }}" class="btn btn-outline-secondary px-4">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-warning px-4 text-white">
                                <i class="fas fa-save me-2"></i>Update Data
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
