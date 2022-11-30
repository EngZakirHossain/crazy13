@extends('layouts.admin.admin_app')
@section('admin.title')
  Profile Edit
@endsection
@section('users')
    submenu active
@endsection
@section('profile')
    active
@endsection
@section('admin.content')



  			<!-- Page Wrapper -->
              <div class="page-wrapper">
				<div class="content container-fluid">
					<div class="page-header">
						<div class="row">
							<div class="col-sm-6">
								<h3 class="page-title">Settings</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a>
									</li>
									<li class="breadcrumb-item active">Profile Settings</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-xl-3 col-md-4">
						
							<!-- Settings Menu -->
							<div class="widget settings-menu">
								<ul>
									<li class="nav-item">
										<a href="{{ route('admin.profile.edit') }}" class="nav-link ">
											<i class="far fa-user"></i> <span>Profile Settings</span>
										</a>
									</li>
									
									
									
									
									<li class="nav-item">
										<a href="change-password.html" class="nav-link active">
											<i class="fas fa-unlock-alt"></i> <span>Change Password</span>
										</a>
									</li>
									
								</ul>
							</div>
							<!-- /Settings Menu -->
							
						</div>
						
						<div class="col-xl-9 col-md-8">
						
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Change Password</h5>
									@if (Session::has('can_not_same_as_old_password'))
										<div class="alert alert-danger">
											{{ Session::get('can_not_same_as_old_password') }}
										</div>
									@endif
									@if (Session::has('change_password_success'))
										<div class="alert alert-success">
											{{ Session::get('change_password_success') }}
										</div>
									@endif
									@if (Session::has('old_password_can_not_match'))
										<div class="alert alert-danger">
											{{ Session::get('old_password_can_not_match') }}
										</div>
									@endif
								</div>
								<div class="card-body">
								
									<!-- Form -->
									<form method="POST" action="{{ route('admin.profile.update_password', Auth::user()->id) }}">
										@csrf
										<div class="row form-group">
											<label for="current_password" class="col-sm-3 col-form-label input-label">Current Password</label>
											<div class="col-sm-9">
												<input type="password" name="old_password" class="form-control" id="current_password" placeholder="Enter current password">
												@error('old_password')
													<div class="text-danger">{{ $message }}</div>
												@enderror
											</div>
										</div>
										<div class="row form-group">
											<label for="new_password" class="col-sm-3 col-form-label input-label">New Password</label>
											<div class="col-sm-9">
												<input type="password" name="password" class="form-control" id="new_password" placeholder="Enter new password">
												@error('password')
													<div class="text-danger">{{ $message }}</div>
												@enderror
												{{-- <div class="progress progress-md mt-2">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
												</div> --}}
											</div>
										</div>
										<div class="row form-group">
											<label for="confirm_password" class="col-sm-3 col-form-label input-label">Confirm new password</label>
											<div class="col-sm-9">
												<div class="mb-3">
													<input type="password" name="password_confirmation" class="form-control" id="confirm_password" placeholder="Confirm your new password">
													@error('password_confirmation')
													<div class="text-danger">{{ $message }}</div>
												@enderror
												</div>

												<h5>Password requirements:</h5>
												<p class="mb-2">Ensure that these requirements are met:</p>
												<ul class="list-unstyled small">
													<li>Minimum 8 characters long - the more, the better</li>
													<li>At least one lowercase character</li>
													<li>At least one uppercase character</li>
													<li>At least one number, symbol</li>
												</ul>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Save Changes</button>
										</div>
									</form>
									<!-- /Form -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
  			</div>
  			<!-- /Page Wrapper -->

@endsection
