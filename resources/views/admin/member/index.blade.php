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
                            <li class="breadcrumb-item"><a href="{{ route('admin.members') }}">All Members</a></li>

                        </ul>
                        <a href="{{ route('admin.member.create') }}" type="button" class="btn btn-primary float-right">

                            Add Member <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">

                    <p class="text-primary">Search Active User</p>

                    <form action="{{ route('admin.members') }}" method="get">
                        <div class="form-group">
                            <input class="form-control" type="text" name="search" id="search"
                                placeholder="Search by name or email">
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
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>phone</th>
                                            <th>email</th>
                                            <th>designation</th>
                                            <th>Added By</th>
                                            <th class="text-right">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($members as $member)
                                            <tr>
                                                <input class="userdelete_val_id" type="hidden" name="id"
                                                    value="{{ $member->id }}">
                                                <td>
                                                    {{ $loop->index + 1 }}
                                                </td>
                                                <td>
                                                    <img onerror="this.src='{{ asset('admin_asset/assets/img/profiles/default_avator.png') }}'"
                                                        src="{{ asset('photo/members_photos') }}/{{ $member->photo }}"
                                                        class="avatar-sm  me-2" alt="{{ $member->name }}">
                                                </td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->phone }}</td>
                                                <td>{{ $member->email }}</td>
                                                <td>{{ $member->designation }}</td>
                                                <td>{{ $member->added_by }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('admin.member.edit', $member->slug) }}"
                                                        type="button" class="btn btn-primary">
                                                        <span data-feather="edit"></span>
                                                    </a>
                                                    <button type="button" class="btn btn-primary">
                                                        <a class="delete_member" id="{{ $member['id'] }}"> <span
                                                                data-feather="trash-2"></span> </a>
                                                    </button>
                                                </td>
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
        <script>
            $(document).on('click', '.delete_member', function() {
                var id = $(this).attr("id");
                Swal.fire({
                    title: 'Are you sure delete this Client?',
                    text: "You won't be able to revert this!",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "{{ route('admin.member.destroy') }}",
                            method: 'POST',
                            data: {
                                id: id
                            },
                            success: function(data) {
                                window.location.reload(true);
                            }
                        });
                    }
                })
            });
        </script>
    @endsection
