@extends('layout')

@section('content')
    <div class="container">
        <h2>{{ $formTitle }}</h2>

        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @endif

        <form action="{{ route('updateTrack', $dataTrack->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label>No. Resi</label>
                <input type="number" id="noResi" name="noResi" class="form-control" required placeholder="No. Resi"
                    value="{{ old('noResi', $dataPaket->noResi) }}" />
            </div>

            <div class="mb-3">
                <label>Waktu</label>
                <input type="text" id="waktu" name="waktu" class="form-control" required placeholder="Waktu"
                    value="{{ old('pengirim', $dataTrack->waktu) }}">
            </div>

            <div class="mb-3">
                <label>Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" class="form-control" required placeholder="Lokasi"
                    value="{{ old('lokasi', $dataTrack->lokasi) }}">
            </div>

            <div class="mb-3">
                <label>Status</label>
                <div>
                    <input type="text" required class="form-control" rows="5" id="status" name="Status"
                        value="{{ old('status', $dataTrack->status) }}">
                </div>
            </div>

            <div class="mb-3">
                <label>Tujuan</label>
                <input type="text" id="tujuan" name="tujuan" class="form-control" required placeholder="Tujuan"
                    value="{{ old('tujuan', $dataTrack->tujuan) }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('trackingHistory') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
