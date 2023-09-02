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
                        <span key="t-dashboards">Dashboards</span>
                    </a>

                </li>
{{--    Profile Edit--}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Profile</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="#" class="" key="t-vertical">See Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('adminProfile-edit') }}" class="" key="t-vertical">Edit Profile</a>
                        </li>
                    </ul>
                </li>
                {{--   End Profile Edit--}}

                {{--    Start Lecturer Edit--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Lecturer List</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('add.lecturer') }}" class= "" key="t-vertical">Add Lecturer</a>
                        </li>
                        <li>
                            <a href="{{ route('manage.lecturer') }}" class= "" key="t-vertical">Manage Lecturer</a>                        </li>
                    </ul>
                </li>
                {{--    End Lecturer Edit--}}
                {{--    Start Student Edit--}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Student List</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('manage.student') }}" class="" key="t-vertical">Manage Student</a>
                        </li>
                    </ul>
                </li>
                {{--    End Student Edit--}}
                {{--    Start Announcement--}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Announcement</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="" key="t-vertical">Add Announcement</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="" key="t-vertical">Manage Announcement</a>
                        </li>
                    </ul>
                </li>
                {{--   End Announcement--}}

                {{--    Start Visiting Complain Box--}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Complain Box</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="" key="t-vertical">See Complain list</a>
                        </li>
                    </ul>
                </li>
                {{--   End Visiting Complain Box--}}
            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
