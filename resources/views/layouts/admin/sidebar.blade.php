<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="@yield('dashboard')">
                    <a href="{{ route('admin.home') }}"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li class="@yield('users')">
                    <a href="#"><i data-feather="users"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="@yield('profile')" href="{{ route('admin.profile') }}">Profile</a></li>
                        @if (Auth::check())
                            @if (Auth::user()->role == 2)
                                <li><a class="@yield('all_users')" href="{{ Route('admin.user') }}">All-Users</a></li>

                            @endif
                        @endif

                    </ul>
                </li>

                <li class="@yield('Members')">
                    <a href="#"><i data-feather="users"></i> <span> Members</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="@yield('members')" href="#">Add Members</a></li>
                        @if (Auth::check())
                            @if (Auth::user()->role == 2)
                                <li><a class="@yield('all_members')" href="{{ Route('admin.member') }}">All-Members</a></li>
                            @endif
                        @endif

                    </ul>
                </li>

                <li class="@yield('social_media')">
                    <a href="#"><i data-feather="credit-card"></i> <span>demo</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
