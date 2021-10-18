
<link rel="stylesheet" href="{{ URL::asset('css/partials/sidebar.css') }}" />



<div class="container-fluid">

  <a class="navbar-brand" href="#" >
    <img src="/assets/Logo.png" width="30" height="30" style="border-radius:100%;border: 2px solid #FD6300 " class="d-inline-block align-top" alt="AMSAI Logo">
    AMSAI Student Information System
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 300px">

    <!-- 

    HEADER
    
    <div class="offcanvas-header">  
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> AMSAI Student Information System</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="margin-left:90%"></button>
    </div> -->

    <div class="offcanvas-body">

      <div>
        <center>
            <img src="/assets/Logo.png" width="50%" style="border-radius:100%;border: 2px solid #FD6300 " class="d-inline-block align-top" alt="AMSAI Logo">
        </center>
      </div>

      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 ">
        <li class="nav-item text-center">
        AMSAI Student Information System
        </li>
        <br>  
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.home') }}"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp; Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.admin-tab') }}"><i class="fas fa-user-secret"></i>&nbsp;&nbsp;&nbsp;Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{ route('admin.student-tab') }}"><i class="fas fa-graduation-cap"></i>&nbsp;&nbsp;&nbsp;Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{ route('admin.faculty-tab') }}"><i class="fas fa-id-badge"></i>&nbsp;&nbsp;&nbsp;Teacher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.class-tab') }}"><i class="fas fa-book"></i>&nbsp;&nbsp;&nbsp;Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{ route('admin.message-tab') }}"><i class="fas fa-inbox"></i>&nbsp;&nbsp;&nbsp;Message</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.calendar-tab') }}"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;Calendar</a>
        </li>
      </ul>   
    </div>
  </div>
</div>
