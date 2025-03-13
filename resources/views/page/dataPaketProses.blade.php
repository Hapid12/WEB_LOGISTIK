<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    
    <!-- Bootstrap & Icons CSS -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
    <!-- Plugin CSS -->
    <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="colored">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary fw-bold">Form Input Paket</h4>
                        <p class="text-center text-muted">Silakan isi data dengan benar</p>
                        <hr>

                        <form action="{{ route('simpanPaket') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="noResi" class="form-label fw-semibold">No. Resi</label>
                                <input type="number" id="noResi" name="noResi" class="form-control" required placeholder="Masukkan No. Resi">
                            </div>

                            <div class="mb-3">
                                <label for="pengirim" class="form-label fw-semibold">Pengirim</label>
                                <input type="text" id="pengirim" name="pengirim" class="form-control" required placeholder="Masukkan Nama Pengirim">
                            </div>

                            <div class="mb-3">
                                <label for="penerima" class="form-label fw-semibold">Penerima</label>
                                <input type="text" id="penerima" name="penerima" class="form-control" required placeholder="Masukkan Nama Penerima">
                            </div>

                            <div class="mb-3">
                                <label for="asal" class="form-label fw-semibold">Asal</label>
                                <textarea id="asal" name="asal" class="form-control" rows="3" required placeholder="Masukkan Lokasi Asal"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tujuan" class="form-label fw-semibold">Tujuan</label>
                                <input type="text" id="tujuan" name="tujuan" class="form-control" required placeholder="Masukkan Tujuan">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label fw-semibold">Status</label>
                                <select id="status" name="status" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option value="Dalam Pengiriman">Dalam Pengiriman</option>
                                    <option value="Tiba di Tujuan">Tiba di Tujuan</option>
                                    <option value="Gagal Dikirim">Gagal Dikirim</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggalUpdate" class="form-label fw-semibold">Tanggal Update</label>
                                <input type="date" id="tanggalUpdate" name="tanggalUpdate" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="estimasiTiba" class="form-label fw-semibold">Estimasi Tiba</label>
                                <input type="date" id="estimasiTiba" name="estimasiTiba" class="form-control" required>
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
    </div>

    <!-- JavaScript -->
    <script src="/assets/js/layout.js"></script>
    <script src="/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="/assets/js/pages/form-validation.init.js"></script>
</body>

</html>
