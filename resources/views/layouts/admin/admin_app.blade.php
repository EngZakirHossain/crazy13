<!DOCTYPE html>
<html lang="en">


<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>
			@yield('admin.title')
		</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('admin_asset')}}/assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('admin_asset')}}/assets/css/bootstrap.min.css">

		{{-- summer note css --}}
        <link rel="stylesheet" href="{{ asset('admin_asset')}}/assets/css/summernote.min.css">


		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('admin_asset')}}/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="{{ asset('admin_asset')}}/assets/plugins/fontawesome/css/all.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('admin_asset')}}/assets/css/style.css">

				<!-- Datatables CSS -->
		<link rel="stylesheet" href="{{ asset('admin_asset')}}/assets/plugins/datatables/datatables.min.css">

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
			<div class="header">

				<!-- Logo -->
				<div class="header-left">
					<a href="index.html" class="logo">
						<img src="{{ asset('admin_asset')}}/assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="{{ asset('admin_asset')}}/assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Sidebar Toggle -->
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Sidebar Toggle -->

				<!-- Search -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- /Search -->

				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->

				<!-- Header Menu -->
				<ul class="nav user-menu">


					<!-- Notifications -->
					 <li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i data-feather="bell"></i> <span class="badge badge-pill">{{ Auth::user()->unreadNotifications()->count() }}</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">

									@forelse (Auth::user()->unreadNotifications as $notification )
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">{{ $notification->data['user_name'] }}</span> {{ $notification->data['details'] }}<span class="noti-title"></span></p>

												</div>
											</div>
										</a>
									</li>
									@empty
										<span style="padding:20px;"></span>	No Notifications Found
									@endforelse

								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
								<img src="{{ asset('photo/profile_photos')}}/{{ Auth::user()->photo }}" alt="profile-photo">
								<span class="status online"></span>
							</span>
							<span>{{ Auth::user()->name }}</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ route('admin.profile') }}"><i data-feather="user" class="mr-1"></i> Profile</a>
							{{-- <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a> --}}
							<a class="dropdown-item" href="{{ route('logout') }}"
								 onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
									<i data-feather="log-out" class="mr-1"></i> {{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
							</form>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
				<!-- /Header Menu -->

			</div>
			<!-- /Header -->
            @include('layouts.admin.sidebar')

			@yield('admin.content')


			        </div>
					<!-- /Main Wrapper -->

					<!-- jQuery -->
					<script src="{{ asset('admin_asset')}}/assets/js/jquery-3.5.1.min.js"></script>

					<!-- Bootstrap Core JS -->
					<script src="{{ asset('admin_asset')}}/assets/js/popper.min.js"></script>
					<script src="{{ asset('admin_asset')}}/assets/js/bootstrap.min.js"></script>

					<!-- Feather Icon JS -->
					<script src="{{ asset('admin_asset')}}/assets/js/feather.min.js"></script>
					<!-- summer note  editor JS -->
					<script src="{{ asset('admin_asset')}}/assets/js/summernote.min.js"></script>

					<!-- Slimscroll JS -->
					<script src="{{ asset('admin_asset')}}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

					<!-- Datatables JS -->
					<script src="{{ asset('admin_asset')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
					<script src="{{ asset('admin_asset')}}/assets/plugins/datatables/datatables.min.js"></script>





					<!-- sweet alert JS -->
					<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



					<!-- Custom JS -->
					<script src="{{ asset('admin_asset')}}/assets/js/script.js"></script>
					@yield('admin.scripts')

				</body>


			</html>
