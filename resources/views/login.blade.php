
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!--begin::Head-->
    <head><base href="../../../../">
        <meta charset="utf-8"/>
        <title>Login | Grow Travel</title>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Login page example"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


                    <!--begin::Page Custom Styles(used by this page)-->
                             <link href="{{ asset('assets/css/pages/login/classic/login-4.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
                        <!--end::Page Custom Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
                    <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
                    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
                    <link href="{{ asset('assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
                <!--end::Layout Themes-->

        <link rel="shortcut icon" href="{{ asset('images/logo-wp.png') }}"/>

            </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body" style="background-image: url({{ asset('assets/media/bg/bg-10.jpg') }})"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >
	{{-- @include('sweetalert::alert') --}}
    	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
	<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('{{ asset('assets/media/bg/bg-3.jpg') }}');">
		<div class="login-form text-center p-7 position-relative overflow-hidden">
			<!--begin::Login Header-->
			<div class="d-flex flex-center mb-15">
				<img src="{{ asset('images/logo-wp.png') }}" class="max-h-75px" alt=""/>
			</div>
			<!--end::Login Header-->

			<!--begin::Login Sign in form-->
			<div class="login-signin">
				<div class="mb-20">
					<h3>SIGNIN </h3>
					<div class="text-muted font-weight-bold">Please insert email and password:</div>
				</div>
				<form action="#" method="post" data-type="json" class="form" id="kt_login_signin_form">
					@csrf
					<div class="form-group mb-5">
						<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" id="email" value="{{ old('email') }}" autocomplete="off" required/>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group mb-5">
						<div class="input-group">
                                <input name="password" type="password" value="" class="form-control h-auto form-control-solid py-4 px-8" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" autocomplete="off"/>
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="password();">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
						<div class="checkbox-inline">
							<label class="checkbox m-0 text-muted">
								<input type="checkbox" name="remember" />
								<span></span>
								Remember me
							</label>
						</div>
						<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget password ?</a>
					</div>
					<button id="kt_login_signin_submit" class="btn font-weight-bold btn-primary py-4 my-3 mx-0" style="padding-right: 45%; padding-left:43%; background:#ff6d05; ">SIGNIN</button>
                    <div><a href="{{ url('auth/google') }}" style="width:100%;" class="btn btn-secondary font-weight-bold px-20 py-4 my-3 mx-0">Login With Google</a></div>
				</form>
				<div class="mt-10">
					<span class="opacity-70 mr-4">
						Does haven't account?
					</span>
					<a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Register!</a>
				</div>
			</div>
			<!--end::Login Sign in form-->

			<!--begin::Login Sign up form-->
			<div class="login-signup">
				<div class="mb-20">
					<h3>Register</h3>
					<div class="text-muted font-weight-bold">Please insert data</div>
				</div>
				<form action="#" method="post" class="form" id="kt_login_signup_form">
					@csrf
					<div class="form-group mb-5">
						<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Fullname" name="name" id="name" required/>
					</div>
					<div class="form-group mb-5">
						<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" id="email_register" autocomplete="off" required/>
					</div>
					<div class="form-group mb-5">
						<div class="input-group">
							<input name="password" type="password" value="" class="form-control h-auto form-control-solid py-4 px-8" id="password_register" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1" autocomplete="off"/>
							<div class="input-group-append">
								<span class="input-group-text" onclick="password_register();">
									<i class="fas fa-eye" id="show_register"></i>
									<i class="fas fa-eye-slash d-none" id="hide_register"></i>
								</span>
							</div>
						</div>
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					</div>
					<div class="form-group mb-5">
						<div class="input-group">
							<input name="cpassword" type="password" value="" class="form-control h-auto form-control-solid py-4 px-8" id="password_konfirmasi" placeholder="Konfirmasi Password" required="true" aria-label="password" aria-describedby="basic-addon1" autocomplete="off"/>
							<div class="input-group-append">
								<span class="input-group-text" onclick="password_konfirmasi();">
									<i class="fas fa-eye" id="show_konfirmasi"></i>
									<i class="fas fa-eye-slash d-none" id="hide_konfirmasi"></i>
								</span>
							</div>
						</div>
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					</div>
					<div class="form-group mb-5 text-left">
						<div class="checkbox-inline">
							<label class="checkbox m-0">
								<input type="checkbox" name="agree" />
								<span></span>
								I confirm <a href="#" class="font-weight-bold ml-1">condition and terms</a>.
							</label>
						</div>
						<div class="form-text text-muted text-center"></div>
					</div>
					<div class="form-group d-flex flex-wrap flex-center mt-10">
						<button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Register</button>
						<button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
					</div>
				</form>
			</div>
			<!--end::Login Sign up form-->

			<!--begin::Login forgot password form-->
			<div class="login-forgot">
				<div class="mb-20">
					<h3>Lupa password ?</h3>
					<div class="text-muted font-weight-bold">Masukkan email untuk verifikasi password baru</div>
				</div>
				<form action="#" method="post" class="form" id="kt_login_forgot_form">
					@csrf
					<input type="hidden" name="token" id="token">
					<div class="form-group mb-10">
						<input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" id="email_lupa" autocomplete="off" required/>
					</div>
					<div class="form-group d-flex flex-wrap flex-center mt-10">
						<button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
						<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
					</div>
				</form>
			</div>
			<!--end::Login forgot password form-->
		</div>
	</div>
</div>
<!--end::Login-->
	</div>
<!--end::Main-->


        <script>var HOST_URL = "{{ url('/') }}";</script>
		<script>
			function password() {
			var x = document.getElementById("password");
			var show_eye = document.getElementById("show_eye");
			var hide_eye = document.getElementById("hide_eye");
			hide_eye.classList.remove("d-none");
			if (x.type === "password") {
				x.type = "text";
				show_eye.style.display = "none";
				hide_eye.style.display = "block";
			} else {
				x.type = "password";
				show_eye.style.display = "block";
				hide_eye.style.display = "none";
			}
			}
		
			function password_register() {
			var x = document.getElementById("password_register");
			var show_eye = document.getElementById("show_register");
			var hide_eye = document.getElementById("hide_register");
			hide_eye.classList.remove("d-none");
			if (x.type === "password") {
				x.type = "text";
				show_eye.style.display = "none";
				hide_eye.style.display = "block";
			} else {
				x.type = "password";
				show_eye.style.display = "block";
				hide_eye.style.display = "none";
			}
			}
		
			function password_konfirmasi() {
			var x = document.getElementById("password_konfirmasi");
			var show_eye = document.getElementById("show_konfirmasi");
			var hide_eye = document.getElementById("hide_konfirmasi");
			hide_eye.classList.remove("d-none");
			if (x.type === "password") {
				x.type = "text";
				show_eye.style.display = "none";
				hide_eye.style.display = "block";
			} else {
				x.type = "password";
				show_eye.style.display = "block";
				hide_eye.style.display = "none";
			}
			}
		</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
    	    	   <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
		    	   <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
		    	   <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
				<!--end::Global Theme Bundle-->


                    <!--begin::Page Scripts(used by this page)-->
                            <script src="{{ asset('assets/js/pages/custom/login/login-general.js?v=7.0.6') }}"></script>
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>
