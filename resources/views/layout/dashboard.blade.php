<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - KPS School Bootstrap Template</title>
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
  * Template Name: KPS School
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
            <a href="/dashboard" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">KPS School</span>
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
                <a class="nav-link {{ request()->is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                    <i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Sections*') ? '' : 'collapsed' }}" href="/Sections">
                    <i class="bi bi-menu-button-wide"></i>
                    <span>Sections</span>
                    <i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Subjects*') ? '' : 'collapsed' }}" href="/Subjects">
                    <i class="bi bi-book"></i>
                    <span>Subjects</span>
                    <i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Academic_years*') ? '' : 'collapsed' }}" href="/Academic_years">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Academic Years</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Classes*') ? '' : 'collapsed' }}" href="/Classes">
                    <i class="bi bi-bar-chart"></i>
                    <span>Classes</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('ClassSections*') ? '' : 'collapsed' }}" href="/ClassSections">
                    <i class="bi bi-journal-bookmark"></i>
                    <span>Class Section</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{ request()->is('ClassSubjects*') ? '' : 'collapsed' }}" href="/ClassSubjects">
                    <i class="bi bi-journal-richtext"></i>
                    <span>Class Subjects</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Students*') ? '' : 'collapsed' }}" href="/Students">
                    <i class="bi bi-people"></i>
                    <span>Students</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Student_enrollments*') ? '' : 'collapsed' }}"
                    href="/Student_enrollments">
                    <i class="bi bi-person-check"></i>
                    <span>Student Enrollments</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Teachers*') ? '' : 'collapsed' }}" href="/Teachers">
                    <i class="bi bi-mortarboard"></i>
                    <span>Teachers</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Teacher_assignments*') ? '' : 'collapsed' }}"
                    href="/Teacher_assignments">
                    <i class="bi bi-mortarboard"></i>
                    <span>Teacher Assignments</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Parents*') ? '' : 'collapsed' }}" href="/Parents">
                    <i class="bi bi-person"></i>
                    <span>Parents</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Parent_students*') ? '' : 'collapsed' }}"
                    href="/Parent_students">
                    <i class="bi bi-person"></i>
                    <span>ParentStudents</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('Users*') ? '' : 'collapsed' }}" href="/Users">
                    <i class="bi bi-file-person"></i>
                    <span>Users</span><i class="bi bi-arrow-left-square ms-auto"></i>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    @yield('dashboard-content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>KPS School</span></strong>. All Rights Reserved
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
