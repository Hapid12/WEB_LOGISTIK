<!doctype html>
<html lang="en" >

<head>
<!-- Layout Js -->
<script src="/assets/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<meta charset="utf-8" />
<title>
    {{$title}}
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesdesign" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="/assets/images/favicon.ico">

<!-- plugin css -->
<link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
</head>
<body data-sidebar="colored" >

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Validation type</h4>
                            <br>
                            <form class="custom-validation" action="{{route('simpanPaket')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>No. Resi</label>
                                    <input type="number" id="noResi" name="noResi" class="form-control" required placeholder="No. Resi" />
                                </div>

                                <div class="mb-3">
                                    <label>Pengirim</label>
                                    <input type="text" id="pengirim" name="pengirim" class="form-control" required
                                    placeholder="pengirim">
                                </div>

                                <div class="mb-3">
                                    <label>Penerima</label>
                                    <input type="text" id="penerima" name="penerima" class="form-control" required
                                    placeholder="penerima">
                                </div>
                                
                                <div class="mb-3">
                                    <label>Asal</label>
                                    <div>
                                        <textarea required class="form-control" rows="5" id="asal" name="asal"></textarea>
                                    </div>
                                </div>
                                    
                                <div class="mb-3">
                                    <label>Tujuan</label>
                                    <input type="text" id="tujuan" name="tujuan" class="form-control" required
                                    placeholder="Tujuan">
                                </div>

                                <div class="mb-3">
                                    <label>Status</label>
                                    <input type="text"  name="status" class="form-control" required
                                    placeholder="Status">
                                </div>

                                <div class="mb-3">
                                    <label>Tanggal Update</label>
                                    <input type="date" id="tanggalUpdate" name="tanggalUpdate" class="form-control" required
                                    placeholder="Tanggal Update">
                                </div>

                                <div class="mb-3">
                                    <label>Estimasi Tiba</label>
                                    <input type="text" id="estimasiTiba" name="estimasiTiba" class="form-control" required
                                    placeholder="Estimasi Tiba">
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->

            </div>
        </body>            
                <script src="/assets/libs/parsleyjs/parsley.min.js"></script>
                <script src="/assets/js/pages/form-validation.init.js"></script>

</html>