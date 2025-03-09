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
                            <form class="custom-validation" action="#">
                                <div class="mb-3">
                                    <label>ID Kurir</label>
                                    <input type="text" id="IDKurir" name="IDKurir" class="form-control" required placeholder="IDKurir" />
                                </div>

                                <div class="mb-3">
                                    <label>Nama Kurir</label>
                                    <input type="text" id="NamaKurir" name="NamaKurir" class="form-control" required
                                    placeholder="Nama Kurir">
                                </div>
                                
                                <div class="mb-0">
                                    
                                <div class="mb-3">
                                    <label>Plat Nomor</label>
                                    <input type="text" id="PlatNomor" name="PlatNomor" class="form-control" required
                                    placeholder="Plat Nomor">
                                </div>

                                <div class="mb-3">
                                    <label>Area Tugas</label>
                                    <input type="text" id="AreaTugas" name="AreaTugas" class="form-control" required
                                    placeholder="Area Tugas">
                                </div>

                                <div class="mb-3">
                                    <label>No. Telephon</label>
                                    <input type="text" id="NoTelephon" name="NoTelephon" class="form-control" required
                                    placeholder="No. Telephon">
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