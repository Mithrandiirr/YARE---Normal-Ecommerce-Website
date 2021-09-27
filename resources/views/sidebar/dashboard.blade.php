
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">

                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item active">
                    <a href="{{route('admin.dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>

                   <li class="sidebar-title">Page &amp; Controller</li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Maintenain</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">User Control</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">User Activity Log</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">Activity Log</a>
                            </li>
                        </ul>
                    </li>




                <li class="sidebar-title">Database</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Accounts</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('admin.accounts') }}">Add/Edit Accounts</a>
                        </li>

                    </ul>


                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('admin.categories') }}">All Categories</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admin.champions')}}" class='sidebar-link'>
                        <i class="bi bi-x-diamond-fill"></i>
                        <span>Champions</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admin.skins')}}" class='sidebar-link'>
                        <i class="bi bi-layers-fill"></i>
                        <span>Skins</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admin.gallery')}}" class='sidebar-link'>
                        <i class="bi bi-puzzle-fill"></i>
                        <span>Gallery</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admin.types')}}" class='sidebar-link'>
                        <i class="bi bi-puzzle-fill"></i>
                        <span>Types</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('logout')}}" class="sidebar-link" onClick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <form id="logout-form" method="POST" action="{{route('logout')}}">
@csrf
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
