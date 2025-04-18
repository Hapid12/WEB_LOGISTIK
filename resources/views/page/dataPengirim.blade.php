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

                            {{-- No Resi --}}
                            <div class="mb-3">
                                <label class="fw-bold">Kode Pengiriman</label>
                                <input type="text" id="kodePengiriman" name="kodePengiriman" class="form-control"
                                    required placeholder="Masukkan No.Resi">
                            </div>

                            {{-- Nama Barang --}}
                            <div class="mb-3">
                                <label class="fw-bold">Nama Pengirim</label>
                                <input type="text" id="namaPengirim" name="namaPengirim" class="form-control" required
                                    placeholder="Masukkan Nama Penerima">
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

                            {{-- Status --}}
                            <div class="mb-3">
                                <label class="fw-bold">Status</label>
                                <select id="status" name="status" class="form-control" required>
                                    <option value="" disabled selected>-- Pilih Provinsi / Ibu Kota --</option>
                                    <option value="Dalam Pengiriman">Dalam Pengiriman</option>
                                    <option value="Belum Dikirim">Belum Dikirim</option>
                                    <option value="Sudah Sampai">Sudah Sampai</option>
                                </select>
                            </div>

                            {{-- Alamat Awal --}}
                            <div class="mb-3">
                                <label class="fw-bold">Alamat Awal</label>
                                <select id="alamatAwal" name="alamatAwal" class="form-control" required>
                                    <option value="" disabled selected>-- Pilih Provinsi / Ibu Kota --</option>
                                    <option value="Aceh">Banda Aceh (Aceh)</option>
                                    <option value="Sumatera Utara">Medan (Sumatera Utara)</option>
                                    <option value="Sumatera Barat">Padang (Sumatera Barat)</option>
                                    <option value="Riau">Pekanbaru (Riau)</option>
                                    <option value="Kepulauan Riau">Tanjung Pinang (Kepulauan Riau)</option>
                                    <option value="Jambi">Jambi (Jambi)</option>
                                    <option value="Sumatera Selatan">Palembang (Sumatera Selatan)</option>
                                    <option value="Bengkulu">Bengkulu (Bengkulu)</option>
                                    <option value="Lampung">Bandar Lampung (Lampung)</option>
                                    <option value="Bangka Belitung">Pangkal Pinang (Bangka Belitung)</option>
                                    <option value="DKI Jakarta">Jakarta (DKI Jakarta)</option>
                                    <option value="Jawa Barat">Bandung (Jawa Barat)</option>
                                    <option value="Banten">Serang (Banten)</option>
                                    <option value="Jawa Tengah">Semarang (Jawa Tengah)</option>
                                    <option value="DI Yogyakarta">Yogyakarta (DI Yogyakarta)</option>
                                    <option value="Jawa Timur">Surabaya (Jawa Timur)</option>
                                    <option value="Bali">Denpasar (Bali)</option>
                                    <option value="Nusa Tenggara Barat">Mataram (Nusa Tenggara Barat)</option>
                                    <option value="Nusa Tenggara Timur">Kupang (Nusa Tenggara Timur)</option>
                                    <option value="Kalimantan Barat">Pontianak (Kalimantan Barat)</option>
                                    <option value="Kalimantan Tengah">Palangka Raya (Kalimantan Tengah)</option>
                                    <option value="Kalimantan Selatan">Banjarmasin (Kalimantan Selatan)</option>
                                    <option value="Kalimantan Timur">Samarinda (Kalimantan Timur)</option>
                                    <option value="Kalimantan Utara">Tanjung Selor (Kalimantan Utara)</option>
                                    <option value="Sulawesi Utara">Manado (Sulawesi Utara)</option>
                                    <option value="Gorontalo">Gorontalo (Gorontalo)</option>
                                    <option value="Sulawesi Tengah">Palu (Sulawesi Tengah)</option>
                                    <option value="Sulawesi Barat">Mamuju (Sulawesi Barat)</option>
                                    <option value="Sulawesi Selatan">Makassar (Sulawesi Selatan)</option>
                                    <option value="Sulawesi Tenggara">Kendari (Sulawesi Tenggara)</option>
                                    <option value="Maluku">Ambon (Maluku)</option>
                                    <option value="Maluku Utara">Sofifi (Maluku Utara)</option>
                                    <option value="Papua">Jayapura (Papua)</option>
                                    <option value="Papua Barat">Manokwari (Papua Barat)</option>
                                    <option value="Papua Selatan">Merauke (Papua Selatan)</option>
                                    <option value="Papua Tengah">Nabire (Papua Tengah)</option>
                                    <option value="Papua Pegunungan">Wamena (Papua Pegunungan)</option>
                                    <option value="Papua Barat Daya">Sorong (Papua Barat Daya)</option>
                                </select>
                            </div>


                            {{-- Alamat Akhir --}}
                            <div class="mb-3">
                                <label class="fw-bold">Alamat Akhir</label>
                                <select id="alamatAkhir" name="alamatAkhir" class="form-control" required>
                                    <option value="" disabled selected>-- Pilih Provinsi / Ibu Kota --</option>
                                    <option value="Aceh">Banda Aceh (Aceh)</option>
                                    <option value="Sumatera Utara">Medan (Sumatera Utara)</option>
                                    <option value="Sumatera Barat">Padang (Sumatera Barat)</option>
                                    <option value="Riau">Pekanbaru (Riau)</option>
                                    <option value="Kepulauan Riau">Tanjung Pinang (Kepulauan Riau)</option>
                                    <option value="Jambi">Jambi (Jambi)</option>
                                    <option value="Sumatera Selatan">Palembang (Sumatera Selatan)</option>
                                    <option value="Bengkulu">Bengkulu (Bengkulu)</option>
                                    <option value="Lampung">Bandar Lampung (Lampung)</option>
                                    <option value="Bangka Belitung">Pangkal Pinang (Bangka Belitung)</option>
                                    <option value="DKI Jakarta">Jakarta (DKI Jakarta)</option>
                                    <option value="Jawa Barat">Bandung (Jawa Barat)</option>
                                    <option value="Banten">Serang (Banten)</option>
                                    <option value="Jawa Tengah">Semarang (Jawa Tengah)</option>
                                    <option value="DI Yogyakarta">Yogyakarta (DI Yogyakarta)</option>
                                    <option value="Jawa Timur">Surabaya (Jawa Timur)</option>
                                    <option value="Bali">Denpasar (Bali)</option>
                                    <option value="Nusa Tenggara Barat">Mataram (Nusa Tenggara Barat)</option>
                                    <option value="Nusa Tenggara Timur">Kupang (Nusa Tenggara Timur)</option>
                                    <option value="Kalimantan Barat">Pontianak (Kalimantan Barat)</option>
                                    <option value="Kalimantan Tengah">Palangka Raya (Kalimantan Tengah)</option>
                                    <option value="Kalimantan Selatan">Banjarmasin (Kalimantan Selatan)</option>
                                    <option value="Kalimantan Timur">Samarinda (Kalimantan Timur)</option>
                                    <option value="Kalimantan Utara">Tanjung Selor (Kalimantan Utara)</option>
                                    <option value="Sulawesi Utara">Manado (Sulawesi Utara)</option>
                                    <option value="Gorontalo">Gorontalo (Gorontalo)</option>
                                    <option value="Sulawesi Tengah">Palu (Sulawesi Tengah)</option>
                                    <option value="Sulawesi Barat">Mamuju (Sulawesi Barat)</option>
                                    <option value="Sulawesi Selatan">Makassar (Sulawesi Selatan)</option>
                                    <option value="Sulawesi Tenggara">Kendari (Sulawesi Tenggara)</option>
                                    <option value="Maluku">Ambon (Maluku)</option>
                                    <option value="Maluku Utara">Sofifi (Maluku Utara)</option>
                                    <option value="Papua">Jayapura (Papua)</option>
                                    <option value="Papua Barat">Manokwari (Papua Barat)</option>
                                    <option value="Papua Selatan">Merauke (Papua Selatan)</option>
                                    <option value="Papua Tengah">Nabire (Papua Tengah)</option>
                                    <option value="Papua Pegunungan">Wamena (Papua Pegunungan)</option>
                                    <option value="Papua Barat Daya">Sorong (Papua Barat Daya)</option>
                                </select>
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
