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
                                            <img onerror="this.src='{{asset('admin_asset/assets/img/profiles/default_avator.png')}}'"
                                                     src="{{ asset('photo/members_photos') }}/{{ $member->photo }}" class="avatar-sm  me-2" alt="{{$member->name}}">
										</td>
										<td>{{ $member->phone }}</td>
										<td>{{ $member->email }}</td>
										<td>{{ $member->designation }}</td>
										<td>{{ $member->added_by }}</td>
										<td class="text-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#memberEdit{{ $member->id }}">
                                                <span data-feather="edit"></span>
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$member->id}}">
                                                <span data-feather="trash-2"></span>
                                            </button>
                                        </td>
{{--                                        //edit model--}}
                                        <div class="modal  fade" id="memberEdit{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" style="border-radius:20px;">

                                                    <div class="card card-table ">

                                                        <div class="card-header bg-primary text-white text-center">
                                                            <h4 class="card-title text-white">Add User</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-11 m-auto">
                                                                    <form class="mt-4" method="post" action="{{ route('admin.member.update',[$member->id]) }}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="">Name <span class="text-danger">*</span> </label>
                                                                            <input class="form-control" type="text" name="name" value="{{ $member->name }}">
                                                                            @error ('name')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Email<span class="text-danger">*</span> </label>
                                                                            <input class="form-control" type="email" name="email" value="{{ $member->email }}">
                                                                            @error ('email')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">phone</label>
                                                                            <input class="form-control" type="phone" name="phone" value="{{ $member->phone }}" placeholder="ex: 01718297506">
                                                                            @error ('phone')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">designation</label>
                                                                            <input class="form-control" type="text" name="designation" value="{{ $member->designation }}">
                                                                            @error ('designation')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Photo</label>
                                                                            <input class="form-control" type="file" name="photo" value="{{ $member->designation }}">
                                                                            <img class="img-thumbnail" src="{{asset('photo/members_photos')}}/{{$member->photo}}" style="height: 100px; width: 200px">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Status</label>
                                                                            <textarea class="form-control" name="status">{{ $member->status }} </textarea>
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
{{--                                        //delete model--}}
                                        <div class="modal fade" id="exampleModal{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{route('admin.member.destroy',[$member->id])}}" method="POST">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete!</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h6>Do you Want to delete this Client?</h6>
                                                            <p>Client won't be available!!</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
									</tr>

									@empty
                                        <tr>
                                            <td colspan="60">No Member Found</td>
                                        </tr>
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

@endsection

