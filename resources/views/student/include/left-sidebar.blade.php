<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Student Dashboards</span>
                    </a>

                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Notices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="#" class="" key="t-vertical">Admin Announcement</a>
                        </li>
                        <li>
                            <a href="#" class="" key="t-vertical">Lecturer Announcement</a>
                        </li>
                    </ul>
                </li>

        {{--    Profile Edit--}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Profile</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('student.profile') }}" class="" key="t-vertical">See Profile</a>
                        </li>
                        <li>
                            <a href="#" class="" key="t-vertical">Change Password</a>
                        </li>
                    </ul>
                </li>
                {{--   End Profile Edit--}}

                {{--    Start Lecturer List show--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Lecturer List</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class= "" key="t-vertical">Select Department Lecturer</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class= "" key="t-vertical">Manage Follow Lecturer List</a>                        </li>
                    </ul>
                </li>
                {{--    End Lecturer Following Edit--}}
                {{--    Start Student Complain --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Student Complain</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="" key="t-vertical">Submit Complain</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="" key="t-vertical">Complain List</a>
                        </li>
                    </ul>
                </li>
                {{--    End Student Complain Edit--}}
            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
