@extends('layouts.admin.admin_auth')
@section('title')
Admin Forget
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
							<h1>Forgot Password?</h1>


							@if (Session::has('email_send_success'))
							<div class="alert alert-success">
								{{ Session::get('email_send_success') }}
							</div>
							@endif
							<p class="account-subtitle">Enter your email to get a password reset link</p>

							<!-- Form -->
							<form method="POST" action="{{ route('admin.forget-password.submit-form') }}">
								@csrf
								{{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
								<div class="form-group">
									<label class="form-control-label">Email Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="form-group mb-0">
									{{-- <button class="btn btn-lg btn-block btn-primary" type="submit">Reset Password</button> --}}
									<button type="submit" class="btn btn-primary btn-lg btn-block">
										{{ __('Send Password Reset Link') }}
									</button>
								</div>
							</form>
							<!-- /Form -->

							<div class="text-center dont-have">Remember your password? <a href="{{ route('admin.login') }}">Login</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->
	@endsection
