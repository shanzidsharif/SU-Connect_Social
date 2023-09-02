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
                        <span key="t-dashboards"> Lecturer Dashboards</span>
                    </a>

                </li>
                <li>
                    <a href="#" class="" key="t-vertical">Admin Notice</a>
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
                            <a href="#" class="" key="t-vertical">Edit Profile</a>
                        </li>
                    </ul>
                </li>
                {{--   End Profile Edit--}}

                {{--    Start Student Edit--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Student List</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class= "" key="t-vertical">Add Student</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class= "" key="t-vertical">Manage Student</a>                        </li>
                    </ul>
                </li>
                {{--    End Student Edit--}}
                {{--    Start Upload File--}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Upload File</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="" key="t-vertical">Upload Files</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="" key="t-vertical">Manage Files</a>
                        </li>
                    </ul>
                </li>
                {{--    End File Uploading--}}
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
