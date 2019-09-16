<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div>
                <img src="/assets/images/faces/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
                <a href="editprofile.html" class="profile-img">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                </a>
            </div>
            <div class="user-info">
                <h2>Kylin Admin</h2>
                <span>Admin</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <li>
            <a class="side-menu__item" href="{{ url('admin/home') }}"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Admin settings</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="admin-pricing.html">General Setting</a></li>
            </ul>
        </li>
        <li>
            <a class="side-menu__item" href="{{ url('admin/suppliers') }}"><i class="side-menu__icon fa fa-shopping-cart"></i><span class="side-menu__label">Suppliers Management</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-institution"></i><span class="side-menu__label">Category</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ url('admin/category/list') }}">Category List</a></li>
                <li><a class="slide-item" href="{{ url('admin/category/create') }}">Create Category</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">Blog</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ url('admin/blog/list') }}">Blog List</a></li>
                <li><a class="slide-item" href="{{ url('admin/blog/create') }}">Create Blog</a></li>
            </ul>
        </li>
        <li>
            <a class="side-menu__item" href="{{ url('admin/seo') }}"><i class="side-menu__icon fa fa-window-restore"></i><span class="side-menu__label">SEO Management</span></a>
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
