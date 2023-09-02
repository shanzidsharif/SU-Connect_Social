<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Register | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}admin/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Free Register</h5>
                                    <p>Get your free Skote account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('/') }}admin/assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="index.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('/') }}admin/assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="needs-validation" novalidate action="{{ route('register') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email" required>
                                    <div class="invalid-feedback">
                                        Please Enter Email
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="name" id="username" placeholder="Enter username" required>
                                    <div class="invalid-feedback">
                                        Please Enter Username
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="suid" class="form-label">User Id</label>
                                    <input type="text" class="form-control" name="suid" id="suid" placeholder="Enter SU-ID" required>
                                    <div class="invalid-feedback">
                                        Please Enter SU Id
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile" required>
                                    <div class="invalid-feedback">
                                        Please Enter Mobile Number
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                    <div class="invalid-feedback">
                                        Please Enter Password
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="userpassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="userpassword1" placeholder="Enter password" required>
                                    <div class="invalid-feedback">
                                        Please Confirm Password
                                    </div>
                                </div>

                                <div class="mt-4 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <h5 class="font-size-14 mb-3">Sign up using</h5>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4 text-center">
                                    <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Already have an account ? <a href="auth-login.html" class="fw-medium text-primary"> Login</a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}admin/assets/libs/node-waves/waves.min.js"></script>

<!-- validation init -->
<script src="{{ asset('/') }}admin/assets/js/pages/validation.init.js"></script>

<!-- App js -->
<script src="{{ asset('/') }}admin/assets/js/app.js"></script>

</body>
</html>
