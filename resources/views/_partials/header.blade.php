{{--Header start--}}
@include('modals.login_modal')
<div class="app-header" style="">
    <div class="app-header__logo">
        <div class="logo-src" style="font-family: cursive"><strong><span class="text-danger">Code</span><span class="text-warning">Community</span></strong></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
        </div>

        <div class="app-header-right">
            @if(!Auth::guest())

            @endif
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    @if(!Auth::guest())
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="35" height="35" class="rounded-circle" src="{{ auth()->user()->avatar_url }}" alt="No Avatar">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="40"  height="40" class="rounded-circle"
                                                                     src="{{ auth()->user()->avatar_url }}" alt="No Image">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">
                                                                    {{ auth()->user()->name }}
                                                                </div>
                                                                <div class="widget-subheading opacity-8">Admin
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <a href="{{ route('logout') }}">
                                                                    <button class="btn-pill btn-shadow btn  btn-danger">
                                                                        <i class="fa fa-sign-out" style="color: white"></i>Logout
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider mb-0 nav-item"></li>
                                        </ul>
                                        <div class="grid-menu grid-menu-2col">
                                            <div class="no-gutters row">
                                                <div class="col-sm-6">
                                                    <button class=" btn btn-primary">
                                                        <i class="fa fa-user"></i>
                                                        Profile
                                                    </button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button class=" btn btn-dark">
                                                        <i class=" fa fa-cog "></i>
                                                        <b>Settings</b>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    {{ auth()->user()->name }}
                                </div>
                                <div class="widget-subheading">
                                    Administrator
                                </div>
                            </div>
                        </div>
                        @else
                        <a  href="{{ route('login') }}" style="text-decoration: none;">
                            <button class="btn btn-default">
                                <i class="fa fa-sign-in"></i> Login
                            </button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button class="btn btn-primary">
                            <i class="fa fa-user"></i>
                            Register For Free
                            </button>
                        </a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{--Header ends--}}
