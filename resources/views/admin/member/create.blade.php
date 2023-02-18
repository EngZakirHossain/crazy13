@extends('layouts.admin.admin_app')
@section('admin.title')
    Create Members
@endsection
@section('members')
    submenu active
@endsection
@section('add_members')
    active
@endsection
@section('admin.content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">All Users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.members') }}">All Members</a></li>

                        </ul>
                        <form class="mt-4" method="post" action="{{ route('admin.member.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header bg-primary text-white text-center">
                                <h4 class="card-title text-white">Add Member</h4>
                            </div>
                            <div class="row mt-4 card-body">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Name <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ old('name') }}" placeholder="enter name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">Email<span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" type="email" name="email"
                                            value="{{ old('email') }}" placeholder="enter email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">Phone</label>
                                        <input class="form-control" type="phone" name="phone"
                                            value="{{ old('phone') }}" placeholder="enter phone">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">Designation</label>
                                        <input class="form-control" type="text" name="designation"
                                            value="{{ old('designation') }}" placeholder="enter designation">
                                        @error('designation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">Address</label>
                                        <textarea class="form-control" name="address"> enter address
										</textarea>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">Status</label>
                                        <select class="form-control" name="live">
                                            <option value="">--Select status--</option>
                                            <option value="1">With Us</option>
                                            <option value="2">Passed Way</option>
                                        </select>
                                        @error('live')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="ml-2">Facebook Link </label>
                                        <input class="form-control" type="text" name="facebook_link"
                                            value="{{ old('facebook_link') }}" placeholder="enter url">
                                        @error('facebook_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">Instagram Link </label>
                                        <input class="form-control" type="text" name="instagram_link"
                                            value="{{ old('instagram_link') }}" placeholder="enter url">
                                        @error('instagram_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">Linkedin Link</label>
                                        <input class="form-control" type="text" name="linkedin_link"
                                            value="{{ old('linkedin_link') }}" placeholder="enter url">
                                        @error('linkedin_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="ml-2">About Me</label>
                                        <textarea class="form-control" name="status">

														</textarea>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="container">
                                        <label class="ml-2">Photo</label>
                                        <input class="form-control dropify" type="file" name="photo"
                                            data-height="120" value="{{ old('photo') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4">
                                <button class="btn-primary btn-m p-2" type="submit">Add Member</button>
                        </form>
                    </div>

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
