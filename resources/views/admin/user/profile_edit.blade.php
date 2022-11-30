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
										<a href="{{ route('admin.profile.edit') }}" class="nav-link active">
											<i class="far fa-user"></i> <span>Profile Settings</span>
										</a>
									</li>
									
									
									
									
									<li class="nav-item">
										<a href="{{ route('admin.profile.change_password') }}" class="nav-link">
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
									<h5 class="card-title">Basic information</h5>
									@if (Session::has('profile_update_success'))
										<div class="alert alert-success">
											{{ Session::get('profile_update_success') }}
										</div>
									@endif
								</div>
								<div class="card-body">
								
									<!-- Form -->
									<form method="POST" action="{{ route('admin.profile.update',Auth::user()->id) }}" enctype="multipart/form-data">
										@csrf
										<div class="row form-group">
											<label for="name" class="col-sm-3 col-form-label input-label">Name</label>
											<div class="col-sm-9">
												<div class="d-flex align-items-center">
													<label class="avatar avatar-xxl profile-cover-avatar m-0" for="edit_img">
														<img id="avatarImg" class="avatar-img" src="{{ asset('photo/profile_photos') }}/{{ Auth::user()->photo }}" alt="Profile Image">
														<input type="file" id="edit_img" name="photo">
														
														<span class="avatar-edit">
															<i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
														</span>
													</label>
												</div>
											</div>
										</div>
										<div class="row form-group">
											<label for="name" class="col-sm-3 col-form-label input-label">Name</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ Auth::user()->name }}">
												@error('name')
													<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
										</div>
										<div class="row form-group">
											<label for="email" class="col-sm-3 col-form-label input-label">Email</label>
											<div class="col-sm-9">
												<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}">
												@error('email')
													<span class="text-danger">{{ $message }}</span>
												@enderror
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
