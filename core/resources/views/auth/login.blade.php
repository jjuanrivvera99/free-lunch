<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Free Lunch | Login Page </title>

		{!! SEO::generate() !!}

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="./assets/css/demo10/pages/login/login-1.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="./assets/css/demo10/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

					<!--begin::Aside-->
					<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(./assets/media//bg/bg-4.jpg);">
						<div class="kt-grid__item">
							<a href="/" class="kt-login__logo">
								<img src="./assets/media/logos/logo-4.png">
							</a>
						</div>
						<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
							<div class="kt-grid__item kt-grid__item--middle">
								<h3 class="kt-login__title">Welcome to FreeLunch!</h3>
								<h4 class="kt-login__subtitle">Web platform to handle free lunch day.</h4>
							</div>
						</div>
						<div class="kt-grid__item">
							<div class="kt-login__info">
								<div class="kt-login__copyright">
									&copy 2019 Free Lunch
								</div>
							</div>
						</div>
					</div>

					<!--begin::Aside-->

					<!--begin::Content-->
					<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

						<!--begin::Head-->
						<div class="kt-login__head">
							<span class="kt-login__signup-label">Don't have an account yet?</span>&nbsp;&nbsp;
							<a href="/register" class="kt-link kt-login__signup-link">Sign Up!</a>
						</div>

						<!--end::Head-->

						<!--begin::Body-->
						<div class="kt-login__body">

							<!--begin::Signin-->
							<div class="kt-login__form">
								<div class="kt-login__title">
									<h3>Sign In</h3>
								</div>

								<!--begin::Form-->
								<form id="login-form" class="kt-form" method="POST" action="{{ route('login') }}" novalidate="novalidate">
									@csrf

									<div class="form-group">
										<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" name="password">
									</div>

									<!--begin::Action-->
									<div class="kt-login__actions">
										<a href="/password/reset" class="kt-link kt-login__link-forgot">
											Forgot Password ?
										</a>
										<button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button>
									</div>

									<!--end::Action-->
								</form>

								<!--end::Form-->
							</div>

							<!--end::Signin-->
						</div>

						<!--end::Body-->
					</div>

					<!--end::Content-->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->
		
		<!--begin::Page Scripts(used by this page) -->
		<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.min.js" type="text/javascript"></script>
		<script src="./js/login.js"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>