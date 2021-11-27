<!--  SIDE BAR-->

<div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">

                <li class="nav-label first">Main Menu</li>

                <li>
                    <a  href="{{ route('admin.home') }}" >
                        <i class="la la-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-shield"></i>
                        <span class="nav-text">Admin</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.admin-tab') }}">All Admins</a></li>
                        <li><a href="{{ route('admin.admin-register') }}">Add Admin</a></li>
                        <!-- <li><a href="#">Edit Professor</a></li>
                        <li><a href="#">Professor Profile</a></li> -->
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-user"></i>
                        <span class="nav-text">Faculties</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.faculty-tab') }}">All Faculties</a></li>
                        <li><a href="{{ route('admin.faculty-register') }}">Add Faculties</a></li>
                        <!-- <li><a href="#">Edit Professor</a></li>
                        <li><a href="#">Professor Profile</a></li> -->
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-users"></i>
                        <span class="nav-text">Students</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.student-tab') }}">All Students</a></li>
                        <li><a href="{{ route('admin.student-register') }}">Add Students</a></li>
                        <!-- <li><a href="edit-student.html">Edit Students</a></li>
                        <li><a href="about-student.html">About Students</a></li> -->
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Class Management</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.classes') }}">Classes</a></li>
                        <li><a href="{{ route('admin.classAssignings') }}">Class Assigning</a></li>
                        <li><a href="{{ route('admin.classSchedulings') }}">Class Scheduling</a></li>
                        <li><a href="{{ route('admin.subjects') }}">Subjects</a></li>
                    </ul>
                </li>
                <li>
                    <a  href="{{ route('admin.message-tab') }}" >
                        <i class="la la-inbox"></i>
                        <span class="nav-text">Messages</span>
                    </a>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-calendar-o"></i>
                        <span class="nav-text">Calendar</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.calendar-tab') }}">All Events </a></li>
                        <li><a href="add-library.html">Add Event</a></li>
                        <!-- <li><a href="edit-library.html">Edit Library</a></li> -->
                    </ul>
                </li>
                <li>
                    <a class="nav-label" href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="la la-arrow-circle-right"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                    <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                </li>



            </ul>
        </div>
    </div>
