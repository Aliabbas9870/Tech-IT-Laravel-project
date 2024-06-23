<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login - NiceAdmin</title>

    <link href="{{ asset('backend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('backend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Nunito|Poppins" rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #E9ECF0;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            height: 100%;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <br><br>
                                        <h1 class="h5 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    @if (session()->has('error'))
                                        <div class="alert alert-danger">
                                            <p class="alert alert-danger">{{ session()->get('error') }}</p>
                                        </div>
                                    @endif
                                    <form class="user" method="post" action="{{ url('/admin/login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="text" class="form-control form-control-user" id="email"
                                                aria-describedby="emailHelp" placeholder="Enter Email Address"
                                                name="email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control form-control-user" id="password"
                                                name="password" placeholder="Password" required="">
                                        </div>
                                        <input type="submit" name="submit"
                                            class="btn btn-info btn-user btn-block mt-4" value="Login">
                                    </form>
                                    <center style="margin-top:20px;">
                                        <a class="mb-4 text-info" href="{{ url('/admin') }}">Back to Home</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('backend/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('backend/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('backend/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('backend/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
</body>

</html>
