@extends('layouts.admin.admin_app')
@section('admin.title')
All Members
@endsection
@section('members')
	submenu active
@endsection
@section('all_members')
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
						<li class="breadcrumb-item"><a href="{{ route('admin.member') }}">All Members</a></li>

					</ul>
					<a href="#" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">

						Add Member <i class="fas fa-plus"></i>
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
												<form class="mt-4" method="post" action="{{ route('admin.member.store') }}" enctype="multipart/form-data">
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
														<label for="">phone</label>
														<input class="form-control" type="phone" name="phone" value="{{ old('phone') }}" placeholder="ex: 01718297506">
														@error ('phone')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="">designation</label>
														<input class="form-control" type="text" name="designation" value="{{ old('designation') }}">
														@error ('designation')
														<span class="text-danger">{{ $message }}</span>
														@enderror
													</div>
													<div class="form-group">
														<label for="">Photo</label>
														<input class="form-control" type="file" name="photo" value="{{ old('photo') }}">
													</div>
													<div class="form-group">
														<label for="">Status</label>
														<textarea class="form-control" name="status">

														</textarea>
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
					User not Added, Please fill-up form correctly
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

					<form action="{{ route('admin.member') }}" method="get">
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
										<th>phone</th>
										<th>email</th>
										<th>designation</th>
										<th>Added By</th>
										<th class="text-right">Actions</th>

									</tr>
								</thead>
								<tbody>
									@forelse ( $members as $member)
									<tr>
										<input class="userdelete_val_id" type="hidden" name="id" value="{{ $member->id }}">
										<td>
											{{ $loop->index + 1 }}
										</td>
										<td>
                                            @if($member->photo)
                                                <a href="{{ route('admin.profile') }}"><img class="avatar avatar-sm mr-2 avatar-img rounded-circle" src="{{ asset('photo/members_photos') }}/{{ $member->photo }}" alt="User Image">{{ $member->name }}</a>
                                            @else
                                                <a href="{{ route('admin.profile') }}"><img class="avatar avatar-sm mr-2 avatar-img rounded-circle" src="{{asset('admin_asset/assets/img/profiles/default_avator.png')}}" alt="">{{ $member->name }}</a>
                                            @endif
											<h2 class="table-avatar">

											</h2>
										</td>
										<td>{{ $member->phone }}</td>
										<td>{{ $member->email }}</td>
										<td>{{ $member->designation }}</td>
										<td>{{ $member->added_by }}</td>
										<td class="text-right">

											<a href="#" class="btn btn-sm btn-white text-success mr-2" data-toggle="modal" data-target=".useredit_{{ $member->id }}"><i class="far fa-edit mr-1"></i> Edit</a>
											<div class="modal fade useredit_{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content" style="border-radius:20px;">

														<div class="card card-table">
															<div class="card-header bg-primary text-white text-center">
																<h4 class="card-title text-white">Update User</h4>
															</div>
															<div class="card-body">
																<div class="row">
																	<div class="col-11 m-auto">
																		<form class="mt-4" action="{{ route('admin.user.update',$member->id) }}" method="post">
																			@csrf

																			<div class="form-group">
																				<label class="float-left" for="">Role</label>

																				<select class="form-control" name="role">
																					<option value="">--Select Role--</option>
																					<option @if ($member->role == 2)
																					{{ 'selected' }}
																					@endif
																					value="2">SuperAdmin</option>
																					<option @if ($member->role == 3)
																					{{ 'selected' }}
																					@endif
																					value="3">Admin</option>
																					<option @if ($member->role == 4)
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
																					<option @if ($member->status == 1)
																					{{ 'selected' }}
																					@endif
																					value="1">Active</option>
																					<option @if ($member->status == 2)
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
                                            <a href="javascript:void(0)"   class="btn btn-sm btn-danger sweet_delete"> <i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>

									@empty

									@endforelse
								</tbody>
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

			var delete_id = $(this).closest("tr").find('.delete_val_id').val();
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

