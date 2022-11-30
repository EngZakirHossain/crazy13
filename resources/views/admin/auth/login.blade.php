@extends('layouts.admin.admin_auth')
@section('admin.title')
Admin Login
@endsection
@section('admin.auth.content')

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">

				<img class="img-fluid logo-dark mb-2" src="{{asset('admin_asset')}}/assets/img/logo.png" alt="Logo">
				<div class="loginbox">

					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							@if (Session::has('passowrd_changed'))
								<div class="alert alert-success">
									{{ Session::get('passowrd_changed') }}
								</div>
							@endif
							@if (Session::has('success'))
								<div class="alert alert-success">
									{{ Session::get('success') }}
								</div>
							@endif
							@if (Session::has('already_success'))
								<div class="alert alert-success">
									{{ Session::get('already_success') }}
								</div>
							@endif
							@if (Session::has('error'))
								<div class="alert alert-danger">
									{{ Session::get('error') }}
								</div>
							@endif
							@if (Session::has('user_not_verified'))
								<div class="alert alert-danger">
									{{ Session::get('user_not_verified') }}
								</div>
							@endif

							<form method="POST" action="{{ route('admin.login.authenticate') }}">
								@csrf
								<div class="form-group">
									<label class="form-control-label">Email Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

										@if (Session::has('error'))
											<p class="text-danger">{{ Session::get('error') }}</p>
										@endif

									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group">
									<label class="form-control-label">Password</label>
									<div class="pass-group">
										<input id="password" type="password" class="form-control pass-input  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
										<span class="fas fa-eye toggle-password"></span>

										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-6">
											<div class="custom-control custom-checkbox">
												<input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
												<label class="custom-control-label" for="remember">Remember me</label>
											</div>
										</div>
										<div class="col-6 text-right">
											<a class="forgot-link" href="{{ route('admin.forget-password') }}">Forgot Password ?</a>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>



							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->
	@endsection
