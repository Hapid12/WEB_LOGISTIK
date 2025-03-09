@extends('layout')

@section('content')
    <div class="container">
        <h2>{{ $formTitle }}</h2>
        
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @endif

        <form action="{{ route('updatePaket', $dataPaket->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label>No. Resi</label>
                <input type="number" id="noResi" name="noResi" class="form-control" required placeholder="No. Resi" 
                value="{{ old('noResi', $dataPaket->noResi) }}"/>
            </div>

            <div class="mb-3">
                <label>Pengirim</label>
                <input type="text" id="pengirim" name="pengirim" class="form-control" required
                placeholder="pengirim" value="{{ old('pengirim', $dataPaket->pengirim) }}">
            </div>

            <div class="mb-3">
                <label>Penerima</label>
                <input type="text" id="penerima" name="penerima" class="form-control" required
                placeholder="penerima" value="{{ old('penerima', $dataPaket->penerima) }}">
            </div>
            
            <div class="mb-3">
                <label>Asal</label>
                <div>
                    <input type="text" required class="form-control" rows="5" id="asal" name="asal" 
                    value="{{ old('asal', $dataPaket->asal) }}">
                </div>
            </div>
                
            <div class="mb-3">
                <label>Tujuan</label>
                <input type="text" id="tujuan" name="tujuan" class="form-control" required
                placeholder="Tujuan" value="{{ old('tujuan', $dataPaket->tujuan) }}">
            </div>

            <div class="mb-3">
                <label>Status</label>
                <input type="text"  name="status" class="form-control" required
                placeholder="Status" value="{{ old('status', $dataPaket->status) }}">
            </div>

            <div class="mb-3">
                <label>Tanggal Update</label>
                <input type="date" id="tanggalUpdate" name="tanggalUpdate" class="form-control" required
                placeholder="Tanggal Update" value="{{ old('tanggalUpdate', $dataPaket->tanggalUpdate) }}">
            </div>

            <div class="mb-3">
                <label>Estimasi Tiba</label>
                <input type="text" id="estimasiTiba" name="estimasiTiba" class="form-control" required
                placeholder="Estimasi Tiba" value="{{ old('estimasiTiba', $dataPaket->estimasiTiba) }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('dataPaket') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
