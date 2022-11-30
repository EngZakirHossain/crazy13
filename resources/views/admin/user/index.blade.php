@extends('layouts.admin.admin_app')
@section('admin.title')
All Users
@endsection
@section('users')
	submenu active
@endsection
@section('all_users')
	active
@endsection
@section('admin.content')



<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">All Users</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('admin.user') }}">All Users</a></li>

					</ul>
					<a href="#" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">

						Add User <i class="fas fa-plus"></i>
					</a>

					<div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content" style="border-radius:20px;">

								<div class="card card-table ">

									<div class="card-header bg-primary text-white text-center">
										<h4 class="card-title text-white">Add User</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-11 m-auto">
												<form class="mt-4" method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
													@csrf

													<div class="form-group">
														<label for="">Name <span class="text-danger">*</span> </label>
														<input class="form-control" type="text" name="name" value="{{ old('name') }}">
														@error ('name')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="">Email<span class="text-danger">*</span> </label>
														<input class="form-control" type="email" name="email" value="{{ old('email') }}">
														@error ('email')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="">Password</label>
														<input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="ex: JhM@mf420">
														@error ('password')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="">Confirm Password</label>
														<input class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
														@error ('password_confirmation')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="">Photo</label>
														<input class="form-control" type="file" name="photo" value="{{ old('photo') }}">
													</div>
													<div class="form-group">
														<label for="">Role</label>
														<select class="form-control" name="role">
															<option value="">--Select Role--</option>
															<option value="2">Super Admin</option>
															<option value="3">Admin</option>
															<option value="4">Editor</option>

														</select>
														@error ('role')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="">Status</label>
														<select class="form-control" name="status">
															<option value="">--Select status--</option>
															<option value="1">Active</option>
															<option value="2">InActive</option>

														</select>
														@error ('status')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>



											</div>
										</div>

									</div>
								</div>



								<div class="modal-footer">
									<button class="btn-sm btn-danger" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button class="btn-primary btn-sm" type="submit">Add User</button>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-sm-12">
				@if ($errors->any())
				<div class="alert alert-danger">
					User not Added, Please fillup form correctly
				</div>
				@endif
				@if (Session::has('user_added_success'))
				<div class="alert alert-success">
					{{ Session::get('user_added_success') }}
				</div>

				@endif
				@if (Session::has('user_update_success'))
				<div class="alert alert-success">
					{{ Session::get('user_update_success') }}
				</div>
				@endif
				@if (Session::has('user_activate_success'))
					<div class="alert alert-danger">
						{{ Session::get('user_activate_success') }}
					</div>

				@endif
				@if (Session::has('user_deactivate_success'))
					<div class="alert alert-danger">
						{{ Session::get('user_deactivate_success') }}
					</div>

				@endif

				<p class="text-primary">Search Active User</p>

					<form action="{{ route('admin.user') }}" method="get">
						<div class="form-group">
							<input class="form-control" type="text" name="search" id="search" placeholder="Search by name or email">
						</div>
						<button type="submit" class="mb-4 btn btn-sm btn-primary">Search</button>
					</form>



					<div class="card">
					<div class="card-header bg-primary text-center text-white">
						<h4 class="card-title text-white">All Active Users</h4>

					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-stripped table-center table-hover datatable">
								<thead class="thead-light">
									<tr>

										<th>Sl.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Registered On</th>
										<th>Role</th>
										<th>Status</th>
										<th>Added By</th>
										<th>Edited By</th>
										<th class="text-right">Actions</th>

									</tr>
								</thead>
								<tbody>
									@forelse ( $user_infos as $user_info)
									<tr>
										<input class="userdelete_val_id" type="hidden" name="id" value="{{ $user_info->id }}">
										<td>
											{{ $loop->index + 1 }}
										</td>
										<td>
                                            @if($user_info->photo)
                                                <a href="{{ route('admin.profile') }}"><img class="avatar avatar-sm mr-2 avatar-img rounded-circle" src="{{ asset('photo/profile_photos') }}/{{ $user_info->photo }}" alt="User Image">{{ $user_info->name }}</a>
                                            @else
                                                <a href="{{ route('admin.profile') }}"><img class="avatar avatar-sm mr-2 avatar-img rounded-circle" src="{{asset('admin_asset/assets/img/profiles/default_avator.png')}}" alt="">{{ $user_info->name }}</a>
                                            @endif
											<h2 class="table-avatar">

											</h2>
										</td>
										<td>{{ $user_info->email }}</td>
										<td>{{ date('d-M-Y', strtotime($user_info->created_at)) }}</td>
										<td><span class="text-success">
												@if ($user_info->role == 2)
												{{ 'SuperAdmin' }}
												@elseif ($user_info->role == 3)
												{{ 'Admin' }}
												@elseif ($user_info->role == 4)
												{{ 'Editor' }}

												@endif


											</span></td>
										@if ($user_info->status == 1)
										<td><span class="badge badge-pill bg-success-light">
												{{ 'Active' }}
											</span></td>
										@endif
										@if ($user_info->status == 2)
										<td><span class="badge badge-pill bg-danger-light">
												{{ 'DeActive' }}
											</span></td>
										@endif
										<td>{{ $user_info->added_by }}</td>
										<td>{{ $user_info->edited_by }}</td>
										<td class="text-right">
											@if (Auth::user()->email != $user_info->email)

												<a href="#" class="btn btn-sm btn-white text-success mr-2" data-toggle="modal" data-target=".useredit_{{ $user_info->id }}"><i class="far fa-edit mr-1"></i> Edit</a>
											@endif
											<div class="modal fade useredit_{{ $user_info->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content" style="border-radius:20px;">

														<div class="card card-table">
															<div class="card-header bg-primary text-white text-center">
																<h4 class="card-title text-white">Update User</h4>
															</div>
															<div class="card-body">
																<div class="row">
																	<div class="col-11 m-auto">
																		<form class="mt-4" action="{{ route('admin.user.update',$user_info->id) }}" method="post">
																			@csrf

																			<div class="form-group">
																				<label class="float-left" for="">Role</label>

																				<select class="form-control" name="role">
																					<option value="">--Select Role--</option>
																					<option @if ($user_info->role == 2)
																					{{ 'selected' }}
																					@endif
																					value="2">SuperAdmin</option>
																					<option @if ($user_info->role == 3)
																					{{ 'selected' }}
																					@endif
																					value="3">Admin</option>
																					<option @if ($user_info->role == 4)
																					{{ 'selected' }}
																					@endif
																					value="4">Editor</option>


																					@error ('role')
																					<span class="text-danger">{{ $message }}</span>
																					@enderror
																				</select>
																			</div>
																			<div class="form-group">
																				<label class="float-left" for="">Status</label>

																				<select class="form-control" name="status">
																					<option value="">--Select Status--</option>
																					<option @if ($user_info->status == 1)
																					{{ 'selected' }}
																					@endif
																					value="1">Active</option>
																					<option @if ($user_info->status == 2)
																					{{ 'selected' }}
																					@endif
																					value="2">DeActive</option>


																					@error ('status')
																					<span class="text-danger">{{ $message }}</span>
																					@enderror
																				</select>
																			</div>




																	</div>
																</div>

															</div>
														</div>



														<div class="modal-footer">
															<button class="btn-sm btn-danger" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button class="btn-primary btn-sm" type="submit">Update User</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											{{-- <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a> --}}
											@if (Auth::user()->email != $user_info->email)

												<a href="{{ route('admin.user.deactive',$user_info->id) }}" class="btn btn-sm btn-white text-danger  mr-2"><i class="far fa-trash-alt mr-1"></i>De-activate</a>
											@endif
										</td>
									</tr>

									@empty

									@endforelse
								</tbody>




							</table>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header bg-danger text-center text-white">
						<h4 class="card-title text-white">All DeActive Users</h4>

					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-stripped table-center table-hover datatable">
								<thead class="thead-light">
									<tr>
										<th>Sl.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Registered On</th>
										<th>Role</th>
										<th>Status</th>
										<th>Added By</th>
										<th>Edited By</th>
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>

									@forelse ($deactive_user_infos as $user_info)
									<tr>
										<input class="userdelete_val_id" type="hidden" name="id" value="{{ $user_info->id }}">
										<td>
											{{ $loop->index + 1 }}
										</td>
										<td>
											<h2 class="table-avatar">
												<a href="#"><img class="avatar avatar-sm mr-2 avatar-img rounded-circle" src="{{ asset('photo/profile_photos') }}/{{ $user_info->photo }}" alt="User Image">{{ $user_info->name }}</a>
											</h2>
										</td>
										<td>{{ $user_info->email }}</td>
										<td>{{ date('d-M-Y', strtotime($user_info->created_at)) }}</td>
										<td><span class="text-success">
												@if ($user_info->role == 2)
												{{ 'SuperAdmin' }}
												@elseif ($user_info->role == 3)
												{{ 'Admin' }}
												@elseif ($user_info->role == 4)
												{{ 'Editor' }}

												@endif


											</span></td>
										@if ($user_info->status == 1)
										<td><span class="badge badge-pill bg-success-light">
												{{ 'Active' }}
											</span></td>
										@endif
										@if ($user_info->status == 2)
										<td><span class="badge badge-pill bg-danger-light">
												{{ 'DeActive' }}
											</span></td>
										@endif
										<td>{{ $user_info->added_by }}</td>
										<td>{{ $user_info->edited_by }}</td>
										<td class="text-right">
											<a href="{{ route('admin.user.active',$user_info->id) }}" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Active</a>

											{{-- <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a> --}}
											<a href="#" class="btn btn-sm btn-white text-danger sweet_delete mr-2"><i class="far fa-trash-alt mr-1"></i>Delete</a>
										</td>
									</tr>
									@empty

									@endforelse


							</table>
						</div>
					</div>
				</div>


			</div>
		</div>

	</div>
</div>
<!-- /Page Wrapper -->
@section('admin.scripts')
<script type="text/javascript">
	$(document).ready(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.sweet_delete').click(function() {


			var delete_id = $(this).closest("tr").find('.userdelete_val_id').val();
			// alert(delete_id);

			Swal.fire({
				title: 'Are you sure?',
				text: "You Delete this account!!!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, Delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					var data = {
						"_token": $('input[name=_token]').val(),
						"id": delete_id,
					};
					$.ajax({
						type: "GET",
						url: '/admin/user/destroy/' + delete_id,
						data: data,
						success: function(response) {
							Swal.fire(
									'Deleted!',
									'User deleted.',
									'success'
								)
								.then((result) => {
									location.reload();
								});
						}
					});



				}
			})
		});
	});

</script>
@endsection
@endsection
