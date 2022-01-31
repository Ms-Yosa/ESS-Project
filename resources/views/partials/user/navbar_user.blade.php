<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <img src="/assets/Logo.png" width="30" class="logo" style="border-radius:100%;border: 2px solid #FD6300 " alt="AMSAI Logo"/>
        <a class="navbar-brand" href="{{ route('user.home') }}" >
            AMSAI Student Information System
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link {{ (request()->is('user/home')) ? 'active' : '' }}" href="{{ route('user.home') }}">Home</a>
                <a class="nav-link {{ (request()->is('user/grade')) ? 'active' : '' }}" href="{{ route('user.grade', Auth::guard('web')->user()->id) }}) }}">Grades</a>
                <a class="nav-link {{ (request()->is('user/behavior')) ? 'active' : '' }}" href="{{ route('user.behavior') }}">Behavior</a>
                <a class="nav-link {{ (request()->is('user/schedule')) ? 'active' : '' }}" href="{{ route('user.schedule') }}">Schedule</a>
                <a class="nav-link" href="#">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::guard('web')->user()->name }} {{ Auth::guard('web')->user()->surname }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('user.profile', Auth::guard('web')->user()->id) }}">Profile <i class="fas fa-user-circle float-right"></i></a>
                      <a class="dropdown-item" href="#">Message <i class="fa fa-comment float-right" aria-hidden="true"></i></a>
                      <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt float-right"></i>
                        Logout
                        <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>