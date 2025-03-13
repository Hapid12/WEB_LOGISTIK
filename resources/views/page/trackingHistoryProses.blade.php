@extends('layout')

@section('content')
<body data-sidebar="colored">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-body">
                    <h4 class="card-title text-center text-primary fw-bold">Form Input Tracking</h4>
                    <p class="text-center text-muted">Silakan isi data dengan benar</p>
                    <hr>

                    <form class="custom-validation" action="{{ route('simpanTrack') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="noresi" class="form-label fw-semibold">No. Resi</label>
                            <input type="text" id="noresi" name="noresi" class="form-control" required placeholder="Masukkan No. Resi">
                        </div>

                        <div class="mb-3">
                            <label for="waktu" class="form-label fw-semibold">Waktu</label>
                            <input type="datetime-local" id="waktu" name="waktu" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="lokasi" class="form-label fw-semibold">Lokasi</label>
                            <textarea id="lokasi" name="lokasi" class="form-control" rows="3" required placeholder="Masukkan Lokasi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="tujuan" class="form-label fw-semibold">Tujuan</label>
                            <input type="text" id="tujuan" name="tujuan" class="form-control" required placeholder="Masukkan Tujuan">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label fw-semibold">Status</label>
                            <select id="status" name="status" class="form-select" required>
                                <option value="" disabled selected>Pilih Status</option>
                                <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                <option value="Tiba di Tujuan">Tiba di Tujuan</option>
                                <option value="Gagal Dikirim">Gagal Dikirim</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                <i class="fas fa-redo"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</body>
@endsection
