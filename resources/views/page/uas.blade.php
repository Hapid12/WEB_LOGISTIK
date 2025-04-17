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
                        <form class="custom-validation" action="{{ route('storeUas') }}" method="POST">
                            @csrf

                            {{-- Nama Barang --}}
                            <div class="mb-3">
                                <label class="fw-bold">Nama Kelompok</label>
                                <input type="number" id="namaKelompok" name="namaKelompok" class="form-control" required
                                    placeholder="Masukkan Nama Penerima">
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold">Nama Anggota</label>
                                <textarea name="namaAnggota" id="namaAnggota" cols="30" placeholder="nama Anggota" rows="10"> </textarea>
                            </div>

                            <div class="mb-3">
                                <label class="fw-bold">Jobdesk</label>
                                <textarea name="jobdesk" id="jobdesk" placeholder="jobdesk" cols="30" rows="10"></textarea>
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
