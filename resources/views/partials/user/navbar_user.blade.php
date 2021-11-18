<nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand" href="#" >
        <img src="/assets/Logo.png" width="30" height="30" style="border-radius:100%;border: 2px solid #FD6300 " class="d-inline-block align-top" alt="AMSAI Logo">
        AMSAI Student Information System
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item {{ (request()->is('user/home')) ? 'active' : '' }}">
                    <a class="nav-link"  href="{{ route('user.home') }}">Home</a>
                </li>
                <li class="nav-item {{ (request()->is('user/grade')) ? 'active' : '' }}">
                    <a class="nav-link"  href="{{ route('user.grade') }}">Grades</a>
                </li>
                <li class="nav-item {{ (request()->is('user/behavior')) ? 'active' : '' }}">
                    <a class="nav-link"  href="{{ route('user.behavior') }}">Behavior</a>
                </li>
                <li class="nav-item {{ (request()->is('user/schedule')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('user.schedule') }}"></i>Schedule</a>
                </li>
            </ul>
        </div>
        <div class="secondary-menu-buttons">
            <a class="student-notif-icon" href="javascript:void(0);"><i class="fa fa-bell" aria-hidden="true"></i></a>
        </div>
        <div id="dd" class="wrapper-dropdown-5" tabindex="1"><i class="fa fa-user" aria-hidden="true"></i>
        <ul class="dropdown">
            <li class="logged-in-user"><a  href="{{ route('user.profile') }}">{{ Auth::guard('web')->user()->name }}<i class="fas fa-user-circle"></i></a></li>
            <li>
                <a  href="#">Message <i class="fa fa-comment" aria-hidden="true"></i> </a>
            </li>
            <li>
                <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout<i class="fas fa-sign-out-alt"></i></a>
                <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>

            </li>
        </ul>
        </div>
    </nav>