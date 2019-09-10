<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<!-- begin::Head -->
	<head>

		<meta charset="utf-8" />
        <title>{{ config('app.name', 'FreeLunch') }}</title>
        
		<!-- SEO Stuff -->
        {!! SEO::generate() !!}

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Asap+Condensed:500"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="./assets/css/demo10/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="demo10/index.html">
					<img alt="Logo" src="./assets/media/logos/logo-10-sm.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-header__top">
							<div class="kt-container ">

								<!-- begin:: Brand -->
								<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
									<div class="kt-header__brand-logo">
										<a href="demo10/index.html">
											<img alt="Logo" src="./assets/media/logos/logo-10.png" class="kt-header__brand-logo-default" />
										</a>
									</div>
								</div>

								<!-- end:: Brand -->

								<!-- begin:: Header Topbar -->
								<div class="kt-header__topbar kt-grid__item kt-grid__item--fluid">

									<!--begin: Notifications -->
									<div class="kt-header__topbar-item dropdown">
										<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
											<span class="kt-header__topbar-icon kt-header__topbar-icon--success"><i class="flaticon2-bell-alarm-symbol"></i></span>
											<span class="kt-hidden kt-badge kt-badge--danger"></span>
										</div>
										<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
											<form>

												<!--begin: Head -->
												<div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
													<h3 class="kt-head__title">
														User Notifications
														&nbsp;
														<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
													</h3>
													<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
														<li class="nav-item">
															<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab" aria-selected="false">Events</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
														</li>
													</ul>
												</div>

												<!--end: Head -->
												<div class="tab-content">
													<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
														<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-line-chart kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New order has been received
																	</div>
																	<div class="kt-notification__item-time">
																		2 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-box-1 kt-font-brand"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New customer is registered
																	</div>
																	<div class="kt-notification__item-time">
																		3 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-chart2 kt-font-danger"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		Application has been approved
																	</div>
																	<div class="kt-notification__item-time">
																		3 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-image-file kt-font-warning"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New file has been uploaded
																	</div>
																	<div class="kt-notification__item-time">
																		5 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-bar-chart kt-font-info"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New user feedback received
																	</div>
																	<div class="kt-notification__item-time">
																		8 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-pie-chart-2 kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		System reboot has been successfully completed
																	</div>
																	<div class="kt-notification__item-time">
																		12 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-favourite kt-font-danger"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New order has been placed
																	</div>
																	<div class="kt-notification__item-time">
																		15 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item kt-notification__item--read">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-safe kt-font-primary"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		Company meeting canceled
																	</div>
																	<div class="kt-notification__item-time">
																		19 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-psd kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New report has been received
																	</div>
																	<div class="kt-notification__item-time">
																		23 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon-download-1 kt-font-danger"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		Finance report has been generated
																	</div>
																	<div class="kt-notification__item-time">
																		25 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon-security kt-font-warning"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New customer comment recieved
																	</div>
																	<div class="kt-notification__item-time">
																		2 days ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-pie-chart kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New customer is registered
																	</div>
																	<div class="kt-notification__item-time">
																		3 days ago
																	</div>
																</div>
															</a>
														</div>
													</div>
													<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
														<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-psd kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New report has been received
																	</div>
																	<div class="kt-notification__item-time">
																		23 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon-download-1 kt-font-danger"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		Finance report has been generated
																	</div>
																	<div class="kt-notification__item-time">
																		25 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-line-chart kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New order has been received
																	</div>
																	<div class="kt-notification__item-time">
																		2 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-box-1 kt-font-brand"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New customer is registered
																	</div>
																	<div class="kt-notification__item-time">
																		3 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-chart2 kt-font-danger"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		Application has been approved
																	</div>
																	<div class="kt-notification__item-time">
																		3 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-image-file kt-font-warning"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New file has been uploaded
																	</div>
																	<div class="kt-notification__item-time">
																		5 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-bar-chart kt-font-info"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New user feedback received
																	</div>
																	<div class="kt-notification__item-time">
																		8 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-pie-chart-2 kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		System reboot has been successfully completed
																	</div>
																	<div class="kt-notification__item-time">
																		12 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-favourite kt-font-brand"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New order has been placed
																	</div>
																	<div class="kt-notification__item-time">
																		15 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item kt-notification__item--read">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-safe kt-font-primary"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		Company meeting canceled
																	</div>
																	<div class="kt-notification__item-time">
																		19 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-psd kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New report has been received
																	</div>
																	<div class="kt-notification__item-time">
																		23 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon-download-1 kt-font-danger"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		Finance report has been generated
																	</div>
																	<div class="kt-notification__item-time">
																		25 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon-security kt-font-warning"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New customer comment recieved
																	</div>
																	<div class="kt-notification__item-time">
																		2 days ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-pie-chart kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		New customer is registered
																	</div>
																	<div class="kt-notification__item-time">
																		3 days ago
																	</div>
																</div>
															</a>
														</div>
													</div>
													<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
														<div class="kt-grid kt-grid--ver" style="min-height: 200px;">
															<div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
																<div class="kt-grid__item kt-grid__item--middle kt-align-center">
																	All caught up!
																	<br>No new notifications.
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>

									<!--end: Notifications -->

									<!--begin: User bar -->
									<div class="kt-header__topbar-item kt-header__topbar-item--user">
										<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
											<span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
											<span class="kt-hidden kt-header__topbar-username">Nick</span>
											<img class="kt-hidden-" alt="Pic" src="./assets/media/users/300_21.jpg" />
											<span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-hidden"><b>S</b></span>
										</div>
										<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

											<!--begin: Head -->
											<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
												<div class="kt-user-card__avatar">
													<img class="kt-hidden-" alt="Pic" src="./assets/media/users/300_25.jpg" />

													<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
													<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
												</div>
												<div class="kt-user-card__name">
													Sean Stone
												</div>
												<div class="kt-user-card__badge">
													<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
												</div>
											</div>

											<!--end: Head -->

											<!--begin: Navigation -->
											<div class="kt-notification">
												<a href="#" class="kt-notification__item">
													<div class="kt-notification__item-icon">
														<i class="flaticon2-calendar-3 kt-font-success"></i>
													</div>
													<div class="kt-notification__item-details">
														<div class="kt-notification__item-title kt-font-bold">
															My Profile
														</div>
														<div class="kt-notification__item-time">
															Account settings and more
														</div>
													</div>
												</a>
												<a href="#" class="kt-notification__item">
													<div class="kt-notification__item-icon">
														<i class="flaticon2-mail kt-font-warning"></i>
													</div>
													<div class="kt-notification__item-details">
														<div class="kt-notification__item-title kt-font-bold">
															My Messages
														</div>
														<div class="kt-notification__item-time">
															Inbox and tasks
														</div>
													</div>
												</a>
												<a href="#" class="kt-notification__item">
													<div class="kt-notification__item-icon">
														<i class="flaticon2-rocket-1 kt-font-danger"></i>
													</div>
													<div class="kt-notification__item-details">
														<div class="kt-notification__item-title kt-font-bold">
															My Activities
														</div>
														<div class="kt-notification__item-time">
															Logs and notifications
														</div>
													</div>
												</a>
												<a href="#" class="kt-notification__item">
													<div class="kt-notification__item-icon">
														<i class="flaticon2-hourglass kt-font-brand"></i>
													</div>
													<div class="kt-notification__item-details">
														<div class="kt-notification__item-title kt-font-bold">
															My Tasks
														</div>
														<div class="kt-notification__item-time">
															latest tasks and projects
														</div>
													</div>
												</a>
												<a href="#" class="kt-notification__item">
													<div class="kt-notification__item-icon">
														<i class="flaticon2-cardiogram kt-font-warning"></i>
													</div>
													<div class="kt-notification__item-details">
														<div class="kt-notification__item-title kt-font-bold">
															Billing
														</div>
														<div class="kt-notification__item-time">
															billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
														</div>
													</div>
												</a>
												<div class="kt-notification__custom kt-space-between">
                                                    <a href="{{ route('logout')}}" target="_blank" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
													<a href="demo10/custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
												</div>
											</div>

											<!--end: Navigation -->
										</div>
									</div>

									<!--end: User bar -->
								</div>

								<!-- end:: Header Topbar -->
							</div>
						</div>
						<div class="kt-header__bottom">
							<div class="kt-container ">

								<!-- begin: Header Menu -->
								<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
                                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                        <ul class="kt-menu__nav ">
                                            <li class="kt-menu__item kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel"
                                                data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                    href="/"
                                                    class="kt-menu__link kt-menu__toggle"><span
                                                        class="kt-menu__link-text">Dashboards</span></a>
                                            </li>
                                            <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel"
                                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><span
                                                        class="kt-menu__link-text">Requests</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                <div
                                                    class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                                    <ul class="kt-menu__subnav">
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-start-up"></i><span
                                                                    class="kt-menu__link-text">Create Request</span></a>
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-photograph"></i><span
                                                                    class="kt-menu__link-text">Asigned</span></a>
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-lorry"></i><span
                                                                    class="kt-menu__link-text">Waiting</span></a>
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                                    class="kt-menu__link-text">Processing</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><span
                                                        class="kt-menu__link-text">Plates</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                <div
                                                    class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                                    <ul class="kt-menu__subnav">
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                                                    class="kt-menu__link-text">Create</span></a>
                                                            
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-browser-2"></i><span
                                                                    class="kt-menu__link-text">List</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                                data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a
                                                    href="javascript:;" class="kt-menu__link kt-menu__toggle"><span
                                                        class="kt-menu__link-text">Market</span><i
                                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                <div
                                                    class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                                    <ul class="kt-menu__subnav">
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-cube-1"></i><span
                                                                    class="kt-menu__link-text">Users</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                            <div
                                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                                <ul class="kt-menu__subnav">
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/list-default.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Default</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/list-datatable.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Datatable</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/list-columns-1.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Columns 1</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/list-columns-2.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Columns 2</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/add-user.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Add
                                                                                User</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/edit-user.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Edit
                                                                                User</span></a></li>
                                                                    <li class="kt-menu__item  kt-menu__item--submenu"
                                                                        data-ktmenu-submenu-toggle="hover"
                                                                        aria-haspopup="true"><a href="javascript:;"
                                                                            class="kt-menu__link kt-menu__toggle"><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Profile
                                                                                1</span><i
                                                                                class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                                        <div
                                                                            class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                                            <ul class="kt-menu__subnav">
                                                                                <li class="kt-menu__item "
                                                                                    aria-haspopup="true"><a
                                                                                        href="/metronic/preview/demo10/custom/apps/user/profile-1/overview.html"
                                                                                        class="kt-menu__link "><i
                                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                            class="kt-menu__link-text">Overview</span></a>
                                                                                </li>
                                                                                <li class="kt-menu__item "
                                                                                    aria-haspopup="true"><a
                                                                                        href="/metronic/preview/demo10/custom/apps/user/profile-1/personal-information.html"
                                                                                        class="kt-menu__link "><i
                                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                            class="kt-menu__link-text">Personal
                                                                                            Information</span></a></li>
                                                                                <li class="kt-menu__item "
                                                                                    aria-haspopup="true"><a
                                                                                        href="/metronic/preview/demo10/custom/apps/user/profile-1/account-information.html"
                                                                                        class="kt-menu__link "><i
                                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                            class="kt-menu__link-text">Account
                                                                                            Information</span></a></li>
                                                                                <li class="kt-menu__item "
                                                                                    aria-haspopup="true"><a
                                                                                        href="/metronic/preview/demo10/custom/apps/user/profile-1/change-password.html"
                                                                                        class="kt-menu__link "><i
                                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                            class="kt-menu__link-text">Change
                                                                                            Password</span></a></li>
                                                                                <li class="kt-menu__item "
                                                                                    aria-haspopup="true"><a
                                                                                        href="/metronic/preview/demo10/custom/apps/user/profile-1/email-settings.html"
                                                                                        class="kt-menu__link "><i
                                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                                            class="kt-menu__link-text">Email
                                                                                            Settings</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/profile-2.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Profile
                                                                                2</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/profile-3.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Profile
                                                                                3</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/user/profile-4.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Profile
                                                                                4</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-writing"></i><span
                                                                    class="kt-menu__link-text">Contacts</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                            <div
                                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                                <ul class="kt-menu__subnav">
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/contacts/list-columns.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Columns</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/contacts/list-datatable.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Datatable</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/contacts/view-contact.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">View
                                                                                Contact</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/contacts/add-contact.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Add
                                                                                Contact</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/contacts/edit-cotact.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Edit
                                                                                Contact</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-writing"></i><span
                                                                    class="kt-menu__link-text">Chat</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                            <div
                                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                                <ul class="kt-menu__subnav">
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/chat/private.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Private</span></a>
                                                                    </li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/chat/group.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Group</span></a>
                                                                    </li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/chat/popup.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Popup</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-telegram-logo"></i><span
                                                                    class="kt-menu__link-text">Projects</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                            <div
                                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                                <ul class="kt-menu__subnav">
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/list-columns-1.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Columns 1</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/list-columns-2.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Columns 2</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/list-columns-3.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Columns 3</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/list-columns-4.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Columns 4</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/list-datatable.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">List -
                                                                                Datatable</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/view-project.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">View
                                                                                Project</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/add-project.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Add
                                                                                Project</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/projects/edit-project.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Edit
                                                                                Project</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="kt-menu__item  kt-menu__item--submenu"
                                                            data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                                href="javascript:;"
                                                                class="kt-menu__link kt-menu__toggle"><i
                                                                    class="kt-menu__link-icon flaticon2-rocket"></i><span
                                                                    class="kt-menu__link-text">Support Center</span><i
                                                                    class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                            <div
                                                                class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                                <ul class="kt-menu__subnav">
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/support-center/home-1.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Home
                                                                                1</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/support-center/home-2.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Home
                                                                                2</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/support-center/faq-1.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">FAQ
                                                                                1</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/support-center/faq-2.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">FAQ
                                                                                2</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/support-center/faq-3.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">FAQ
                                                                                3</span></a></li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/support-center/feedback.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">Feedback</span></a>
                                                                    </li>
                                                                    <li class="kt-menu__item " aria-haspopup="true"><a
                                                                            href="/metronic/preview/demo10/custom/apps/support-center/license.html"
                                                                            class="kt-menu__link "><i
                                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                                class="kt-menu__link-text">License</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                                href="/metronic/preview/demo10/custom/apps/inbox.html"
                                                                class="kt-menu__link "><i
                                                                    class="kt-menu__link-icon flaticon2-rocket"></i><span
                                                                    class="kt-menu__link-text">Inbox</span><span
                                                                    class="kt-menu__link-badge"><span
                                                                        class="kt-badge kt-badge--danger kt-badge--inline">new</span></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            </ul>
                                    </div>
                                </div>

								<!-- end: Header Menu -->
							</div>
						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
						<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
							<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

								<!-- begin:: Content Head -->
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-container ">
										<div class="kt-subheader__main">
											<h3 class="kt-subheader__title">Dashboard</h3>
											<span class="kt-subheader__separator kt-subheader__separator--v"></span>
											<a href="#" data-toggle="modal" data-target="#kt_modal" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">
												New Request
											</a>
										</div>
									</div>
								</div>

								<!-- end:: Content Head -->

								<!-- begin:: Content -->
								<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
								    <div class="kt-portlet kt-portlet--mobile">
								        <div class="kt-portlet__head kt-portlet__head--lg">
								            <div class="kt-portlet__head-label">
								                <span class="kt-portlet__head-icon">
								                    <i class="kt-font-brand flaticon2-line-chart"></i>
								                </span>
								                <h3 class="kt-portlet__head-title">
								                    List of Orders
								                </h3>
								            </div>
								            <div class="kt-portlet__head-toolbar">
								                <div class="kt-portlet__head-wrapper">
								                    <div class="kt-portlet__head-actions">
								                        <div class="dropdown dropdown-inline">
								                            <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
								                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								                                <i class="la la-download"></i> Export
								                            </button>
								                            <div class="dropdown-menu dropdown-menu-right">
								                                <ul class="kt-nav">
								                                    <li class="kt-nav__section kt-nav__section--first">
								                                        <span class="kt-nav__section-text">Choose an option</span>
								                                    </li>
								                                    <li class="kt-nav__item">
								                                        <a href="#" class="kt-nav__link">
								                                            <i class="kt-nav__link-icon la la-print"></i>
								                                            <span class="kt-nav__link-text">Print</span>
								                                        </a>
								                                    </li>
								                                    <li class="kt-nav__item">
								                                        <a href="#" class="kt-nav__link">
								                                            <i class="kt-nav__link-icon la la-copy"></i>
								                                            <span class="kt-nav__link-text">Copy</span>
								                                        </a>
								                                    </li>
								                                    <li class="kt-nav__item">
								                                        <a href="#" class="kt-nav__link">
								                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
								                                            <span class="kt-nav__link-text">Excel</span>
								                                        </a>
								                                    </li>
								                                    <li class="kt-nav__item">
								                                        <a href="#" class="kt-nav__link">
								                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
								                                            <span class="kt-nav__link-text">CSV</span>
								                                        </a>
								                                    </li>
								                                    <li class="kt-nav__item">
								                                        <a href="#" class="kt-nav__link">
								                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
								                                            <span class="kt-nav__link-text">PDF</span>
								                                        </a>
								                                    </li>
								                                </ul>
								                            </div>
								                        </div>
								                        &nbsp;
								                        <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
								                            <i class="la la-plus"></i>
								                            New Record
								                        </a>
								                    </div>
								                </div>
								            </div>
								        </div>
								        <div class="kt-portlet__body">

								            <!--begin: Datatable -->
								            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
								                <thead>
								                    <tr>
								                        <th>RequestID</th>
								                        <th>User</th>
								                        <th>Kitchener</th>
								                        <th>Plate</th>
								                        <th>Date</th>
								                        <th>Status</th>
								                        <th>Actions</th>
								                    </tr>
								                </thead>
								            </table>

								            <!--end: Datatable -->
								        </div>
								    </div>
								</div>

								<!-- end:: Content -->
							</div>
						</div>
					</div>

					<!-- begin:: Footer -->
					<div class="kt-footer kt-grid__item" id="kt_footer">
						<div class="kt-container ">
							<div class="kt-footer__wrapper">
								<div class="kt-footer__copyright">
									2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
								</div>
								<div class="kt-footer__menu">
									<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">About</a>
									<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Team</a>
									<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Contact</a>
								</div>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		<div id="kt_quick_panel" class="kt-quick-panel">
			<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>
			<div class="kt-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
						<div class="kt-notification">
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-line-chart kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been received
									</div>
									<div class="kt-notification__item-time">
										2 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-box-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-chart2 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Application has been approved
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-image-file kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New file has been uploaded
									</div>
									<div class="kt-notification__item-time">
										5 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-bar-chart kt-font-info"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New user feedback received
									</div>
									<div class="kt-notification__item-time">
										8 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart-2 kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										System reboot has been successfully completed
									</div>
									<div class="kt-notification__item-time">
										12 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-favourite kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been placed
									</div>
									<div class="kt-notification__item-time">
										15 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item kt-notification__item--read">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-safe kt-font-primary"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Company meeting canceled
									</div>
									<div class="kt-notification__item-time">
										19 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-psd kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New report has been received
									</div>
									<div class="kt-notification__item-time">
										23 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-download-1 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Finance report has been generated
									</div>
									<div class="kt-notification__item-time">
										25 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-security kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer comment recieved
									</div>
									<div class="kt-notification__item-time">
										2 days ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 days ago
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
						<div class="kt-notification-v2">
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-bell kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										5 new user generated report
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-box kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										2 new items submited
									</div>
									<div class="kt-notification-v2__item-desc">
										by Grog John
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-psd kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										79 PSD files generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-supermarket kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										$2900 worth producucts sold
									</div>
									<div class="kt-notification-v2__item-desc">
										Total 234 items
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-paper-plane-1 kt-font-success"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-information kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										Database server is down
									</div>
									<div class="kt-notification-v2__item-desc">
										10 mins ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-mail-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										System report has been generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-hangouts-logo kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
						<form class="kt-form">
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Case Tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Support Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Generate Reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Report Export:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow Data Collection:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Member singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Allow User Feedbacks:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Enable Customer Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
        
        <!-- Modal -->
            <div class="modal fade" id="kt_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">New request</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Massive Request</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input data-switch="true" type="checkbox" checked="checked"
                                            data-on-color="success" data-off-color="warning">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="kt_switch_modal" tabindex="-1" role="dialog" aria-labelledby=""
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">Bootstrap Switch Examples</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="la la-remove"></span>
                            </button>
                        </div>
                        <form class="kt-form kt-form--fit kt-form--label-right">
                            <div class="modal-body">
                                <div class="form-group row kt-margin-t-20">
                                    <label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input data-switch="true" type="checkbox" checked="checked" id="kt_switch_1">
                                        <input data-switch="true" type="checkbox" id="kt_switch_1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">State Colors</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input data-switch="true" type="checkbox" checked="checked"
                                            data-on-color="success" data-off-color="warning">
                                        <input data-switch="true" type="checkbox" checked="checked"
                                            data-on-color="brand">
                                        <input data-switch="true" type="checkbox" checked="checked"
                                            data-on-color="danger">
                                        <input data-switch="true" type="checkbox" checked="checked"
                                            data-on-color="info">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Custom Label</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input data-switch="true" type="checkbox" checked="checked" data-on-text="True"
                                            data-off-text="False" data-on-color="success">
                                        <input data-switch="true" type="checkbox" checked="checked" data-on-text="1"
                                            data-off-text="0" data-on-color="info">
                                        <input data-switch="true" type="checkbox" checked="checked"
                                            data-on-text="Enabled" data-off-text="Disabled" data-on-color="brand">
                                    </div>
                                </div>
                                <div class="form-group row kt-margin-b-20">
                                    <label class="col-form-label col-lg-3 col-sm-12">Disabled State</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input data-switch="true" type="checkbox" checked="checked" disabled>
                                        <input data-switch="true" type="checkbox" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-brand" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--begin::Modal-->

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- end::Sticky Toolbar -->


		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
        
		<!--end:: Global Optional Vendors -->
        
		<!--begin::Global Theme Bundle(used by all pages) -->
        <script src="./assets/js/demo10/scripts.bundle.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

        <script>
            var host = "{{ env('PUBLISHER_URL', 'http://localhost') }}";
            var port = "{{ env('BROADCAST_PORT', '8081') }}";
        </script>

        <script src="/js/socket.js"></script>
        <script src="/js/request.js"></script>

		<!--end::Global Theme Bundle -->

		<!--end::Page Vendors -->

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>