<!DOCTYPE html>
<html lang="en">


<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>
			@yield('admin.title')
		</title>

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('admin_asset')}}/assets/img/favicon.png">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('admin_asset')}}/assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('admin_asset')}}/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="{{asset('admin_asset')}}/assets/plugins/fontawesome/css/all.min.css">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('admin_asset')}}/assets/css/style.css">

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
@yield('admin.auth.content')

		<!-- jQuery -->
		<script src="{{ asset('admin_asset') }}/assets/js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('admin_asset') }}/assets/js/popper.min.js"></script>
		<script src="{{ asset('admin_asset') }}/assets/js/bootstrap.min.js"></script>

		<!-- Feather Icon JS -->
		<script src="{{ asset('admin_asset') }}/assets/js/feather.min.js"></script>

		<!-- Custom JS -->
		<script src="{{ asset('admin_asset') }}/assets/js/script.js"></script>

	</body>


</html>
