<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                <div class="top-bar-left d-flex">
                    <div class="clearfix">
                        <ul class="socials">
                            <li>
                                <a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix">
                        <ul class="contact border-left">
                            <li class="mr-5 d-lg-none">
                                <a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
                            </li>
                            <li class="select-country mr-5">
                                <select class="form-control select2-flag-search" data-placeholder="Select Country">
                                    <option value="AU" selected>Australia</option>
                                    <option value="CN">China</option>
                                </select>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="text-dark" data-toggle="dropdown"><span>Currency <i class="fa fa-caret-down text-muted"></i></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item" >
                                        USD
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        AUD
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        RMB
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                <div class="top-bar-right">
                    <ul class="custom">
                        @if(!session('user_data.id'))
                        <li>
                            <a href="{{ url('user/register') }}" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
                        </li>
                        <li>
                            <a href="{{ url('user/login') }}" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
                        </li>
                        @else
                            @if(session('user_data.type')=='supplier')
                                <li>
                                    <a href="{{ url('supplier/home') }}" class="text-dark"><i class="fa fa-home mr-1"></i> <span> My Dashboard</span></a>
                                </li>
                                @else
                                <li class="dropdown">
                                    <a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="{{ url('user/dashboard') }}" class="dropdown-item" >
                                            <i class="dropdown-icon si si-user"></i> My Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon si si-envelope"></i> Inbox
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon si si-bell"></i> Notifications
                                        </a>
                                        <a href="mydash.html" class="dropdown-item" >
                                            <i class="dropdown-icon  si si-settings"></i> Account Settings
                                        </a>
                                        <a class="dropdown-item" href="{{ url('user/logout') }}">
                                            <i class="dropdown-icon si si-power"></i> Log out
                                        </a>
                                    </div>
                                </li>
                            @endif
                        <li>
                            <a href="{{ url('user/logout') }}" class="text-dark"><i class="fa fa-sign-out mr-1"></i> <span>Log Out</span></a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
