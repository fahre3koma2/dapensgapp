<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Xmee | Login and Register Form Html Templates</title>
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
						</div>
						<div class="fxt-form">
							<form method="POST">
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="email" class="form-control" name="email" placeholder="Email" required="required">
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input type="password" class="form-control" name="regpassword" placeholder="Password" required="required">
									</div>
								</div>

								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-4">
										<input type="password" class="form-control" name="konfirmpass" placeholder="Konfirmasi Password" required="required">
									</div>
								</div>
                                <p id="message_pass_register"></p>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-5">
										<div class="fxt-checkbox-area">
											<div class="checkbox">
												<input type="checkbox" id="validationCheck" onchange="toggleSave(this)" name="cekbok" required>
												<label for="validationCheck">I agree to the terms of service</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-6">
										<button type="submit" class="fxt-btn-fill">Register</button>
									</div>
								</div>
							</form>
						</div>
						<div class="fxt-footer">
							<div class="fxt-transformY-50 fxt-transition-delay-7">
								<p>Have you an account?<a href="{!! url('login') !!}" class="switcher-text2 inline-text">Log in</a></p>
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

        <script>
            $(document).ready(function() {

                $('#regpassword #konfirmpass').on('keyup', function () {
                    if($('#regpassword').val() ==""){
                        $('#message_pass_register').html('Password Harus Di isi !').css('color', 'red');
                    }else if($('#konfirmpass').val() ==""){
                        $('#message_pass_register').html('Konfirmasi Password Harus Di isi !').css('color', 'red');
                    }else if ($('#regpassword').val() == $('#konfirmpass').val()) {
                        $('#message_pass_register').html('Password Cocok !').css('color', 'green');
                    } else
                        $('#message_pass_register').html('Password Tidak Cocok !').css('color', 'red');
                });

                function show_lupa_kata_sandi(){
                    swal({
                        title: "Informasi !",
                        text: "Silahkan hubungi Pelayanan Dapen TELKOM di nomor (022) 1500022, atau HP/WA/Telegram 0811 2193 151, 0811 2183 151, atau email ke customercare@dapentelkom.co.id",
                        icon: "info",
                        button: "OK !",
                    });
                }

                function toggleSave(element){
                    if($(element).is(':checked')){
                        $('#save_button').prop('disabled', false);
                    }
                    else{
                        $('#save_button').prop('disabled', true)
                    }
                }
            });
        </script>
</body>

</html>
