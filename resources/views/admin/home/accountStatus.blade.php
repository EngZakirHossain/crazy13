@extends('layouts.admin.admin_app')
@section('admin.title')
  Personal Blog Home
@endsection
@section('admin.content')



  			<!-- Page Wrapper -->
              <div class="page-wrapper">
                  <div class="content container-fluid">

  					<!-- Page Header -->
  					<div class="page-header">
  						<div class="row">
  							<div class="col-sm-12">
  								<h3 class="page-title">Account Home</h3>
  								<ul class="breadcrumb">
  									<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
  									<li class="breadcrumb-item active text-danger">Account Inactive</li>
  								</ul>
  							</div>
  						</div>
  					</div>
  					<!-- /Page Header -->

  					<div class="row">
  						<div class="col-sm-12">
  							<h1 class="text-danger"> Your Account is now on hold, For details Contact with SuperAdmin. <br/>
                  Thanks.
                </h1>
  						</div>
  					</div>

  				</div>
  			</div>
  			<!-- /Page Wrapper -->

@endsection
