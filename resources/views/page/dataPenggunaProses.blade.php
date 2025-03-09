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
                                    <label>ID Pengguna</label>
                                    <input type="text" id="IDPengguna" name="IDPengguna" class="form-control" required placeholder="IDPengguna" />
                                </div>

                                <div class="mb-3">
                                    <label>Nama Pengguna</label>
                                    <input type="text" id="NamaPengguna" name="NamaPengguna" class="form-control" required
                                    placeholder="Nama Pengguna">
                                </div>
                                

                                    
                                <div class="mb-3">
                                    <label>No. Hp</label>
                                    <input type="text" id="NoHp" name="Nohp" class="form-control" required
                                    placeholder="No. Hp">
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required
                                    placeholder="Email">
                                </div>

                                

                                <div class="mb-3">
                                    <label>Alamat</label>
                                    <input type="text area" id="Alamat" name="Alamat" class="form-control" required
                                    placeholder="Alamat">
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