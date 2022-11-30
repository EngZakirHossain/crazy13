@extends('layouts.admin.admin_auth')
@section('admin.title')
Admin Reset Password
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
  							<h1>Password Reset</h1>

                @if (Session::has('error'))
                  <div class="alert alert-danger">
                    {{ Session::get('error') }}
                  </div>
                @endif
  							<p class="account-subtitle">Enter All Credintial for Passowrd Reset</p>

  							<!-- Form -->
  							<form method="POST" action="{{ route('admin.reset-password.submit-form') }}">
  								@csrf
  								<input type="hidden" name="token" value="{{ $token }}">
  								<div class="form-group">
  									<label class="form-control-label">Email Address</label>
  									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>


  									@error('email')
  											<span class="invalid-feedback" role="alert">
  													<strong>{{ $message }}</strong>
  											</span>
  									@enderror
  								</div>
  								<div class="form-group">
  									<label class="form-control-label">Password</label>
  									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autofocus>

  									@error('password')
  											<span class="invalid-feedback" role="alert">
  													<strong>{{ $message }}</strong>
  											</span>
  									@enderror
  								</div>
  								<div class="form-group">
  									<label class="form-control-label">Confirm Password</label>
  									<input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  required autofocus>

  									@error('password_confirmation')
  											<span class="invalid-feedback" role="alert">
  													<strong>{{ $message }}</strong>
  											</span>
  									@enderror
  								</div>
  								<div class="form-group mb-0">
  									{{-- <button class="btn btn-lg btn-block btn-primary" type="submit">Reset Password</button> --}}
  									<button type="submit" class="btn btn-primary btn-lg btn-block">
  											{{ __('Reset Password') }}
  									</button>
  								</div>
  							</form>
  							<!-- /Form -->


  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<!-- /Main Wrapper -->
@endsection
