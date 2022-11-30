@extends('layouts.admin.admin_app')
@section('admin.title')
  Profile
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

  					<!-- Page Header -->
  					<div class="page-header">
  						<div class="row">
  							<div class="col-sm-12">
  								<h3 class="page-title">User Profile</h3>
  								<ul class="breadcrumb">
  									<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
  									<li class="breadcrumb-item active">profile</li>
  								</ul>
  							</div>
  						</div>
  					</div>
  					<!-- /Page Header -->

  					{{-- <div class="row">
  						<div class="col-sm-12">
  							Contents here
  						</div>
  					</div> --}}
                      <div class="profile-cover">
                        <div class="profile-cover-wrap">
                            <img class="profile-cover-img" src="{{ asset('photo/profile_photos') }}/{{ Auth::user()->photo }}" alt="Profile Cover">

                            <!-- Custom File Cover -->
                            <div class="cover-content">
                                <div class="custom-file-btn">
                                    
                                </div>
                            </div>
                            <!-- /Custom File Cover -->
                        </div>
                    </div>
                    <div class="text-center mb-5">
                        <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                            <img class="avatar-img" src="{{ asset('photo/profile_photos') }}/{{ Auth::user()->photo }}" alt="Profile Image">
                            
                        </label>
                        <h2>{{ Auth::user()->name }} <i class="fas fa-certificate text-primary small" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fas fa-user-shield"></i> <span>
                                    @if (Auth::user()->role == 2)
                                        {{ 'Super Admin' }}
                                    @elseif (Auth::user()->role == 3)
                                        {{ 'Admin' }}
                                    @elseif (Auth::user()->role == 4)
                                        {{ 'Sub Admin' }}
                                    @elseif (Auth::user()->role == 5)
                                        {{ 'Editor' }}
                                    @endif
                                </span>
                            </li> <br>
                            <li class="list-inline-item">
                                <i class="far fa-calendar-alt"></i> Joined  {{ date('M-Y', strtotime(Auth::user()->created_at)) }} 
                            </li>
                            <li class="list-inline-item">
                                <i class="fas fa-user"></i> <span>Added by - {{ Auth::user()->added_by }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title d-flex justify-content-between">
                                        <span>Profile</span> 
                                        <a class="btn btn-sm btn-white" href="{{ route('admin.profile.edit') }}">Edit</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="py-0">
                                            <small class="text-dark">Name</small>
                                        </li>
                                        <li>
                                            {{ Auth::user()->name }}
                                        </li>
                                        <br>
                                        <li class="py-0">
                                            <small class="text-dark">Email</small>
                                        </li>
                                        <li>
                                            {{ Auth::user()->email }}
                                        </li>
                                        <br>
                                        <li class="py-0">
                                            <small class="text-dark">Added By</small>
                                        </li>
                                        <li>
                                            {{ Auth::user()->added_by }}
                                        </li>
                                        <br>
                                        <li class="py-0">
                                            <small class="text-dark">Edited By</small>
                                        </li>
                                        <li>
                                            {{ Auth::user()->edited_by }}
                                        </li>
                                        <br>
                                        
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Activity</h5>
                                </div>
                                <div class="card-body card-body-height">
                                    <ul class="activity-feed">
                                        <li class="feed-item">
                                            <div class="feed-date">Nov 16</div>
                                            <span class="feed-text"><a href="profile.html">Brian Johnson</a> has paid the invoice <a href="view-invoice.html">"#DF65485"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Nov 7</div>
                                            <span class="feed-text"><a href="profile.html">Marie Canales</a>  has accepted your estimate <a href="view-estimate.html">#GTR458789</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Jan 27</div>
                                            <span class="feed-text"><a href="profile.html">Robert Martin</a> gave a review for <a href="product-details.html">"Dell Laptop"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Jan 14</div>
                                            <span class="feed-text">New customer registered <a href="profile.html">"Tori Carter"</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

  				</div>
  			</div>
  			<!-- /Page Wrapper -->

@endsection
