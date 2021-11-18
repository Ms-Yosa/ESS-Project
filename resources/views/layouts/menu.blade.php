<li class="nav-item">
    <a href="{{ route('classes.index') }}"
       class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
        <p>Classes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classrooms.index') }}"
       class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
        <p>Classrooms</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('levelFromTables.index') }}"
       class="nav-link {{ Request::is('levelFromTables*') ? 'active' : '' }}">
        <p>Level--From Tables</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('subjects.index') }}"
       class="nav-link {{ Request::is('subjects*') ? 'active' : '' }}">
        <p>Subjects</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('levels.index') }}"
       class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
        <p>Levels</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('attendances.index') }}"
       class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
        <p>Attendances</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('academics.index') }}"
       class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
        <p>Academics</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classAssignings.index') }}"
       class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
        <p>Class Assignings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classSchedulings.index') }}"
       class="nav-link {{ Request::is('classSchedulings*') ? 'active' : '' }}">
        <p>Class Schedulings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('days.index') }}"
       class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
        <p>Days</p>
    </a>
</li>


