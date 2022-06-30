<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
    <div class="navbar-brand header-logo">
    <a href="index.html" class="b-brand">
    <div class="b-bg">
    <i class="feather icon-trending-up"></i>
    </div>
    <span class="b-title">{{ env('APP_NAME') }}</span>
    </a>
    <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
    </div>
    <div class="navbar-content scroll-div">
    <ul class="nav pcoded-inner-navbar">

    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item {{ Request::segment(2) == 'dashboard' ? 'active' : ''}}">
        <a href="{{ route('admin.home') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
    </li>
    <li class="{{ Request::segment(2) == 'players' ? 'active' : ''}}">
        <a href="{{ route('fetch.all.players') }}"  class="nav-link "><span class="pcoded-micon"><i class="fa fa-user" aria-hidden="true"></i></span>Players</a>
    </li>
    <li class="{{ Request::segment(2) == 'brands' ? 'active' : ''}}" >
        <a href="{{ route('fetch.all.brands') }}"  class="nav-link "><span class="pcoded-micon"><i class="feather icon-gitlab" aria-hidden="true"></i></span>Brands</a>
    </li>
    <li class="{{ Request::segment(2) == 'games' ? 'active' : ''}}">
        <a href="{{ route('games.index') }}"  class="nav-link "><span class="pcoded-micon"><i class="fa fa-gamepad" aria-hidden="true"></i></span>Games</a>
    </li>
    <li class="{{ Request::segment(2) == 'videos' ? 'active' : ''}}">
        <a href="#"  class="nav-link "><span class="pcoded-micon"><i class="fa fa-video" aria-hidden="true"></i></span>Videos</a>
    </li>
    </ul>
    </li>

    </ul>
    </div>
    </div>
    </nav>

