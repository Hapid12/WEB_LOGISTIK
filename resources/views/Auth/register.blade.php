<!doctype html>
<html lang="en">

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

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="colored">
    <div class="auth-maintenance d-flex align-items-center min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100 py-0 py-xl-3">

                                <div class="card my-auto overflow-hidden">
                                    <div class="row g-0">
                                        <!-- Area Logo -->
                                        <div class="col-lg-4 d-flex justify-content-center align-items-center position-relative"
                                            style="background-color: #E2E8F0; min-height: 400px; overflow: visible;">
                                            <img src="/assets/images/PT(sidebar).png" alt="Logo"
                                                style="max-width: 3000px; width: 100%; height: auto; padding: 5px;">
                                        </div>

                                        <!-- Area Form -->
                                        <div class="col-lg-8 d-flex justify-content-center align-items-center p-4">
                                            <div class="w-100" style="max-width: 400px; text-align: center;">
                                                <h4 class="mb-3"> Silahkan Register !</h4>
                                                <p class="mb-4">Buat akun Untuk Logitrack!</p>

                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="mb-3 text-start">
                                                        <label>Username</label>
                                                        <input type="text" name="username" class="form-control" required>
                                                    </div>
                                                
                                                    <div class="mb-3 text-start">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control" required>
                                                    </div>
                                                
                                                    <div class="mb-3 text-start">
                                                        <label>Password</label>
                                                        <input type="password" name="password" class="form-control" required>
                                                    </div>
                                                
                                                    <div class="mb-3 text-start">
                                                        <label>Konfirmasi Password</label>
                                                        <input type="password" name="password_confirmation" class="form-control" required>
                                                    </div>
                                                
                                                    <button type="submit" class="btn btn-primary w-100">Register</button>
                                                </form>                                                

                                                <p class="text-center">
                                                    Sudah Punya Akun?
                                                    <a href="/" class="text-primary">Login Disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <div class="mt-5 text-center">
                                <p class="mb-0">©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Tocly. Crafted
                                    with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="/assets/js/pages/form-validation.init.js"></script>
