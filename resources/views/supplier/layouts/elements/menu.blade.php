<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            @php
                if($user->supplier ==null ){
                    $user->createRelatedSupplier();
                }
            @endphp
            <div>

                @if($user->supplier->avatar_path !==null)
                    <img src="{{ asset($user->supplier->avatar_path) }}" alt="user-img" class="avatar avatar-lg brround">
                @else
                    <img src="/assets/images/faces/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
                @endif
                <a href="{{ url('supplier/profile') }}" class="profile-img">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                </a>
            </div>
            <div class="user-info">
                <h2>{{ $user->name }}</h2>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <li>
            <a class="side-menu__item" href="{{ url('supplier/home') }}"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Admin settings</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ url($user->supplier->buildUrl()) }}">Frontend Preview</a></li>
                <li><a class="slide-item" href="{{ url('supplier/profile') }}">Update Profile</a></li>

            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-institution"></i><span class="side-menu__label">Product</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ url('supplier/product/list') }}">Product List</a></li>
                <li><a class="slide-item" href="{{ url('supplier/product/create') }}">Upload New Product</a></li>
            </ul>
        </li>
    </ul>
    <div class="app-sidebar-footer">
        <a href="emailservices.html">
            <span class="fa fa-envelope" aria-hidden="true"></span>
        </a>
        <a href="profile.html">
            <span class="fa fa-user" aria-hidden="true"></span>
        </a>
        <a href="editprofile.html">
            <span class="fa fa-cog" aria-hidden="true"></span>
        </a>
        <a href="login.html">
            <span class="fa fa-sign-in" aria-hidden="true"></span>
        </a>
        <a href="chat.html">
            <span class="fa fa-comment" aria-hidden="true"></span>
        </a>
    </div>
</aside>
