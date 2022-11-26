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
                <a class="nav-link" href="{{ url('/vehicle/new') }}" aria-expanded="falae" aria-controls="instructor">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Vehicle Info</span>
                </a>
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
                <a class="nav-link" href="{{ url('/exam/new') }}" aria-expanded="false" aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Exams</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/report/student') }}" aria-expanded="false" aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Student Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/report/instructor') }}" aria-expanded="false"
                    aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Instructor Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/report/exam') }}" aria-expanded="false" aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Exams Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/report/classschedule') }}" aria-expanded="false"
                    aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Class Schedule Report</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/report/payment') }}" aria-expanded="false"
                    aria-controls="students">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Payment Report</span>
                </a>
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
