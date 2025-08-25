<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboardfiles/images/favicon.png') }}">
    <title>testing</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet"
        href="{{ asset('dashboardfiles/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboardfiles/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('dashboardfiles/dist/css/style.min.css') }}">


    <style>
        /* Dark mode overrides */
        [data-theme="dark"] {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Sidebar + Topbar */
        [data-theme="dark"] .topbar,
        [data-theme="dark"] .left-sidebar {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Cards */
        [data-theme="dark"] .card {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Dropdowns */
        [data-theme="dark"] .dropdown-menu {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Footer */
        [data-theme="dark"] .footer {
            background-color: #222 !important;
            color: #aaa !important;
        }

        /* Dark Mode Root */
        [data-theme="dark"],
        [data-theme="dark"] body {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Topbar + Sidebar */
        [data-theme="dark"] .topbar,
        [data-theme="dark"] .left-sidebar {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Page wrapper & content */
        [data-theme="dark"] .page-wrapper {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Cards */
        [data-theme="dark"] .card {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Dropdowns */
        [data-theme="dark"] .dropdown-menu {
            background-color: #2c2c2c !important;
            color: #f1f1f1 !important;
        }

        /* Footer */
        [data-theme="dark"] .footer {
            background-color: #2c2c2c !important;
            color: #bbb !important;
        }



        /* Dark mode logo */
        [data-theme="dark"] .navbar-brand {
            background-color: #2c2c2c !important;

        }

        /* Default (light mode) keeps your current border */
        #navbarSupportedContent {
            border-bottom: 1px solid #edf2f9 !important;
        }

        /* Dark mode auto override */
        [data-theme="dark"] #navbarSupportedContent {
            border-bottom: 1px solid #444 !important;
            /* softer dark grey */
        }

        /* Light mode logo (default) */
        #logo {
            content: url("../assets/images/freedashDark.svg");
        }

        /* Dark mode logo */
        [data-theme="dark"] #logo {
            content: url("../assets/images/freedashDark.svg");
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @include('dashboard.layout.preloader')

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" class="main-wrapperr" data-theme="light" data-layout="vertical" data-navbarbg="skin6"
        data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('dashboard/layout/header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('dashboard/layout/sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-light-emphasis font-weight-medium mb-1">Basic
                            Initialisation</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('dashboard.layout.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('dashboardfiles/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dashboardfiles/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('dashboardfiles/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- apps -->
    <script src="{{ asset('dashboardfiles/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dashboardfiles/dist/js/feather.min.js') }}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dashboardfiles/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('dashboardfiles/assets/extra-libs/sparkline/sparkline.js') }}"></script>

    <!-- Menu sidebar -->
    <script src="{{ asset('dashboardfiles/dist/js/sidebarmenu.js') }}"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('dashboardfiles/dist/js/custom.min.js') }}"></script>

    <!-- This page plugins -->
    <script src="{{ asset('dashboardfiles/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboardfiles/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('dashboardfiles/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const wrapper = document.getElementById("main-wrapper");
            const toggleBtn = document.getElementById("theme-toggle");

            // Load saved theme or default to light
            let savedTheme = localStorage.getItem("theme") || "light";
            wrapper.setAttribute("data-theme", savedTheme);

            // Update button text/icon
            toggleBtn.innerText = savedTheme === "dark" ? "☀️ Light" : "🌙 Dark";

            // Toggle theme on click
            toggleBtn.addEventListener("click", function() {
                let currentTheme = wrapper.getAttribute("data-theme");
                let newTheme = currentTheme === "light" ? "dark" : "light";
                wrapper.setAttribute("data-theme", newTheme);
                localStorage.setItem("theme", newTheme);
                toggleBtn.innerText = newTheme === "dark" ? "☀️ Light" : "🌙 Dark";
                toggleBtn.classList.add("text-muted");

            });
        });
    </script>
</body>

</html>
