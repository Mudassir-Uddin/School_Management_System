<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="p-2 badge rounded-pill bg-primary ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.edit') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        {{-- <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li> --}}

                        <li>
                                                    <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="/Sections">
                    <i class="bi bi-menu-button-wide"></i><span>Sections</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Sections">
                            <i class="bi bi-circle"></i><span>List Sections</span>
                        </a>
                    </li>
                    <li>
                        <a href="/SectionsInsert">
                            <i class="bi bi-circle"></i><span>Add Section</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Sections Nav -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#subjects-nav" data-bs-toggle="collapse"
                    href="/Subjects">
                    <i class="bi bi-book"></i><span>Subjects</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Subjects">
                            <i class="bi bi-circle"></i><span>List Subjects</span>
                        </a>
                    </li>
                    <li>
                        <a href="/SubjectsInsert">
                            <i class="bi bi-circle"></i><span>Add Subject</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Subjects Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#academic-years-nav" data-bs-toggle="collapse"
                    href="/Academic_years">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Academic Years</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="academic-years-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Academic_years">
                            <i class="bi bi-circle"></i><span>List Academic Years</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Academic_yearsInsert">
                            <i class="bi bi-circle"></i><span>Add Academic Year</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Acadmic Year Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#classes-nav" data-bs-toggle="collapse"
                    href="/Classes">
                    <i class="bi bi-bar-chart"></i><span>Classes</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="classes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Classes">
                            <i class="bi bi-circle"></i><span>List Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="/ClassesInsert">
                            <i class="bi bi-circle"></i><span>Add Class</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Classes Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#class-subjects-nav" data-bs-toggle="collapse"
                    href="/ClassSubjects">
                    <i class="bi bi-journal-bookmark"></i><span>Class Subjects</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="class-subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/ClassSubjects">
                            <i class="bi bi-circle"></i><span>List Class Subjects</span>
                        </a>
                    </li>
                    <li>
                        <a href="/ClassSubjectsInsert">
                            <i class="bi bi-circle"></i><span>Add Class Subject</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Class Subjects Nav -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#students-nav" data-bs-toggle="collapse"
                    href="/Students">
                    <i class="bi bi-people"></i><span>Students</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="students-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Students">
                            <i class="bi bi-circle"></i><span>List Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="/StudentsInsert">
                            <i class="bi bi-circle"></i><span>Add Student</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Students Nav -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#Student_enrollments-nav" data-bs-toggle="collapse"
                    href="/Student_enrollments">
                    <i class="bi bi-person-check"></i><span>Student Enrollments</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="Student_enrollments-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Student_enrollments">
                            <i class="bi bi-circle"></i><span>List Student Enrollments</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Student_enrollmentsInsert">
                            <i class="bi bi-circle"></i><span>Add Student Enrollments</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Student_enrollments Nav -->
                 
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#Teachers-nav" data-bs-toggle="collapse"
                    href="/Teachers">
                    <i class="bi bi-mortarboard"></i><span>Teachers</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="Teachers-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Teachers">
                            <i class="bi bi-circle"></i><span>List Teachers</span>
                        </a>
                    </li>
                    <li>
                        <a href="/TeachersInsert">
                            <i class="bi bi-circle"></i><span>Add Teachers</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Teachers Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#Teacher_assignments-nav" data-bs-toggle="collapse"
                    href="/Teacher_assignments">
                    <i class="bi bi-mortarboard"></i><span>Teacher Assignments</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="Teacher_assignments-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Teacher_assignments">
                            <i class="bi bi-circle"></i><span>List Teacher Assignments</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Teacher_assignmentsInsert">
                            <i class="bi bi-circle"></i><span>Add Teacher Assignments</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Teacher Assignments Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#parents-nav" data-bs-toggle="collapse"
                    href="/Parents">
                    <i class="bi bi-person"></i><span>Parents</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="parents-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Parents">
                            <i class="bi bi-circle"></i><span>List Parents</span>
                        </a>
                    </li>
                    <li>
                        <a href="/ParentsInsert">
                            <i class="bi bi-circle"></i><span>Add Parent</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Parents Nav -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#ParentStudents-nav" data-bs-toggle="collapse"
                    href="/Parent_students">
                    <i class="bi bi-person"></i><span>ParentStudents</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="ParentStudents-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Parent_students">
                            <i class="bi bi-circle"></i><span>List ParentStudents</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Parent_studentsInsert">
                            <i class="bi bi-circle"></i><span>Add Parent</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End ParentStudents Nav -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse"
                    href="/Users">
                    <i class="bi bi-file-person"></i><span>Users</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Users">
                            <i class="bi bi-circle"></i><span>List Users</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Users Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    @yield('dashboard-content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
