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
                        <form action="{{ route('updatePengiriman', $dataPengirim->id) }}" method="post">
                            @csrf

                            {{-- No Resi --}}
                            <div class="mb-3">
                                <label class="fw-bold">No. Resi</label>
                                <input type="text" id="noresi" name="noresi" class="form-control"
                                    value="{{ old('noresi', $dataPengirim->noresi) }}" required
                                    placeholder="Masukkan No. resi">
                            </div>

                            {{-- Penerima --}}
                            <div class="mb-3">
                                <label class="fw-bold">Penerima</label>
                                <input type="text" id="penerima" name="penerima" class="form-control"
                                    value="{{ old('penerima', $dataPengirim->penerima) }}" required
                                    placeholder="Masukkan Nama Penerima">
                            </div>

                            {{-- Tujuan --}}
                            <div class="mb-3">
                                <label class="fw-bold">Tujuan</label>
                                <select id="tujuan" name="tujuan" class="form-select" required>
                                    <option value="" disabled selected>Pilih Tujuan</option>
                                    <option value="Luar Kota" {{ $dataPengirim->tujuan == 'Luar Kota' ? 'selected' : '' }}>
                                        Luar
                                        Kota</option>
                                    <option value="Dalam Kota"
                                        {{ $dataPengirim->tujuan == 'Dalam Kota' ? 'selected' : '' }}>
                                        Dalam
                                        Kota</option>
                                </select>
                            </div>

                            {{-- Layanan --}}
                            <div class="mb-3">
                                <label class="fw-bold">Layanan</label>
                                <select id="layanan" name="layanan" class="form-select" required>
                                    <option value="" disabled selected>Pilih Layanan</option>
                                    <option value="Udara" {{ $dataPengirim->layanan == 'Udara' ? 'selected' : '' }}>
                                        Udara
                                    </option>
                                    <option value="Laut" {{ $dataPengirim->layanan == 'Laut' ? 'selected' : '' }}>Laut
                                    </option>
                                    <option value="Darat" {{ $dataPengirim->layanan == 'Darat' ? 'selected' : '' }}>
                                        Darat
                                    </option>
                                </select>
                            </div>

                            {{-- Berat --}}
                            <div class="mb-3">
                                <label class="fw-bold">Berat</label>
                                <input type="text" id="berat" name="berat" class="form-control"
                                    value="{{ old('berat', $dataPengirim->berat) }}" required
                                    placeholder="Masukkan Nama Penerima">
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('pengiriman') }}" class="btn btn-secondary">
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
