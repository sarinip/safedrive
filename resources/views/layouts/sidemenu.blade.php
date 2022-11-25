<style>
    .active {
        background: #323232 !important;
    }

    .active {
        background: #323232 !important;
    }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if (session()->get('user')[0]->role == 'STUDENT')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}" aria-expanded="false" aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/student/profile/' . session()->get('student_id')[0]) }}"
                    aria-expanded="false" aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/student/appointment') }}" aria-expanded="false"
                    aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Class Schedule</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/student/calenderview/') }}" aria-expanded="false"
                    aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Student Calender</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/payment') }}" aria-expanded="false" aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Payments</span>
                </a>
            </li>
        @endif

        @if (session()->get('user')[0]->role == 'INSTRUCTOR')
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="true" aria-controls="icons">
                    <i class="icon-paper  menu-icon"></i>
                    <span class="menu-title">Vehicle Info</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="{{ asset('/admin/vehicle') }}">New</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ asset('/admin/editvehicle') }}">Update &
                                Delete</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/instructor/profile/') }}" aria-expanded="falae"
                    aria-controls="instructor">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Instructor Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/instructor/schedule/') }}" aria-expanded="falae"
                    aria-controls="instructor">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Instructor Schedule</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/instructor/calenderview/') }}" aria-expanded="falae"
                    aria-controls="instructor">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Instructor Calender</span>
                </a>
            </li>
        @endif

        @if (session()->get('user')[0]->role == 'ADMIN')
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/core-dashboard') }}" aria-expanded="false" aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="true" aria-controls="icons">
                    <i class="icon-paper  menu-icon"></i>
                    <span class="menu-title">Exam Info</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="icons">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="">New</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Update & Delete</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="true"
                    aria-controls="tables">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Reports</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ url('/report/instructor') }}">Instructors</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/report/student') }}">Students</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/report/payment') }}">Payments</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/report/classschedule') }}">Class
                                Schedule</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/report/exam') }}">Exams</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/report/vehicle') }}">Vehicles</a>
                        </li>
                    </ul>
                </div>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}" aria-expanded="falae" aria-controls="instructor">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
