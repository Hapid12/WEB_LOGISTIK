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

            <div class="auth-maintenance d-flex align-items-center min-vh-100">
                <div class="bg-overlay bg-light"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
                                <div class="w-100">
                                    <div class="d-flex flex-column h-100 py-0 py-xl-3">
                                        <div class="text-center mb-4">
                                            <a href="/index" class="">
                                                <img src="/assets/images/logo-dark.png" alt="" height="22"
                                                    class="auth-logo logo-dark mx-auto">
                                                <img src="/assets/images/logo-light.png" alt="" height="22"
                                                    class="auth-logo logo-light mx-auto">
                                            </a>
                                            <p class="text-muted mt-2">Silahkan Buat akun</p>
                                        </div>

                                        <div class="card my-auto overflow-hidden">
                                            <div class="row g-0">
                                                <div class="col-lg-6">
                                                    <div class="bg-overlay bg-primary"></div>
                                                    <div class="h-100 bg-auth align-items-end">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="p-lg-5 p-4">
                                                        <div>
                                                            <div class="text-center mt-1">
                                                                <h4 class="font-size-18">Register</h4>
                                                            </div>
                                                            
                                                                            <form action="/signup" method="post"
                                                                                class="auth-input needs-validation" novalidate>
                                                                                <div class="mb-2">
                                                                                    <label for="username"
                                                                                        class="form-label">Username</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="username" name="username" required
                                                                                        placeholder="Enter username">
                                                                                <div class="invalid-feedback">
                                                                                    Please Enter a valid username.
                                                                                </div>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                    <label for="useremail"
                                                                                        class="form-label">Email</label>
                                                                                    <input type="email"
                                                                                        class="form-control"
                                                                                        name="email" id="useremail" required
                                                                                        placeholder="Enter email">
                                                                                <div class="invalid-feedback">
                                                                                    Please Enter a valid email.
                                                                                </div>
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="password-input">Password</label>
                                                                                    <input type="password"
                                                                                        class="form-control"required
                                                                                        name="password" minlength="5"
                                                                                        placeholder="Enter password">
                                                                                <div class="invalid-feedback">
                                                                                    Please Enter a valid password.
                                                                                </div>
                                                                                </div>

                                                                                <div>
                                                                                    <p class="mb-0">Syarat dan ketentuan <a href="#"
                                                                                            class="text-primary"> Setujui?</a></p>
                                                                                </div>

                                                                                <div class="mt-3">
                                                                                    <button
                                                                                        class="btn btn-primary w-100"
                                                                                        type="submit">Register</button>
                                                                                </div>

                                                                                <div class="mt-4 pt-2 text-center">
                                                                                    <div class="signin-other-title">
                                                                                        <h5
                                                                                            class="font-size-14 mb-4 title">
                                                                                            Sign In with
                                                                                        </h5>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                        </div>

                                                        <div class="mt-4 text-center">
                                                            <p class="mb-0">Already have an account ? <a
                                                                    href="{{route('login')}}" class="fw-medium text-primary">
                                                                    Login</a> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->

                                        <div class="mt-5 text-center">
                                            <p class="mb-0">©
                                                <script>document.write(new Date().getFullYear())</script> Tocly. Crafted
                                                with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
</body>


            <script src="/assets/js/pages/form-validation.init.js"></script>