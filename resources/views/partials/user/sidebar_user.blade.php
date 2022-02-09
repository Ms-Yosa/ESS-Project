<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.home') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Home</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.grade') }}">
        <i class="ti-book menu-icon"></i>
        <span class="menu-title">Grades</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.feedback') }}">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Feedbacks</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.schedule') }}">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Schedule</span>
      </a>
    </li>
  </ul>
</nav>