<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Aplikasi Dapen SG | Login </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ url('logn/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ url('logn/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ url('logn/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ url('logn/style.css') }}">
</head>

<body>
	<section class="fxt-template-animation fxt-template-layout20">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-12 fxt-none-991 fxt-bg-img" data-bg-image="{{ url('logn/img/figure/bg20.jpg') }}"></div>
                <div class="col-xl-5 col-lg-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-header">
                            <a href="{!! url('login') !!}" class="fxt-logo"><img src="{{ url('logn/img/logo20.png') }}" alt="Logo"></a>
                            <div class="fxt-style-line">
                                <h2>Or Login With Email</h2>
                            </div>
                        </div>
                        <div class="fxt-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                                        <div class="fxt-checkbox-area">
                                            <a href="forgot-password-20.html" class="switcher-text">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <button type="submit" class="fxt-btn-fill">Log in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="fxt-footer">
                            <div class="fxt-transformY-50 fxt-transition-delay-5">
                                <p>Don't have an account?<a href="{!! url('register') !!}" class="switcher-text2 inline-text">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- jquery-->
	<script src="{{ url('logn/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Popper js -->
	<script src="{{ url('logn/js/popper.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ url('logn/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ url('logn/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ url('logn/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ url('logn/js/main.js') }}"></script>

</body>

</html>



