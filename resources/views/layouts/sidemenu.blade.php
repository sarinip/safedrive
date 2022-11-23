<!-- <style>
.active {
background: #323232 !important;}
</style> -->

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/student') }}" aria-expanded="false" aria-controls="students">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/student/profile') }}" aria-expanded="false" aria-controls="students">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/student/sheduleclass') }}" aria-expanded="false"
                aria-controls="students">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Class Sheduling</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/payment') }}" aria-expanded="falae" aria-controls="students">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Payments</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-paper  menu-icon"></i>
                <span class="menu-title">Vehicle Info</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ asset('/admin/vehicle') }}">New</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ asset('/admin/editvehicle') }}">Update &
                            Delete</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/instructor/profile/') }}" aria-expanded="falae" aria-controls="students">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Instructor Profile</span>
            </a>
        </li>
        <!-- <li class="nav-item"> -->
        <!-- <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables"> -->
        <!-- <i class="icon-bar-graph menu-icon"></i> -->
        <!-- <span class="menu-title">Reports</span> -->
        <!-- <i class="menu-arrow"></i> -->
        <!-- </a> -->
        <!-- <div class="collapse" id="tables"> -->
        <!-- <ul class="nav flex-column sub-menu"> -->
        <!-- <li class="nav-item"><a class="nav-link" href="">Employee</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="">Students</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="">Payments</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="">Class Schedule</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="">Exams</a></li> -->
        <!-- </ul> -->
        <!-- </div> -->
        <!-- </li> -->
    </ul>
</nav>
