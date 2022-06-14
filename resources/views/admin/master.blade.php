<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title> Mentor Hub </title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="admincss/adminstyle.min.css" rel="stylesheet">
</head>

<body>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-brand" data-logobg="skin6">


                    <div class="container">
                        <a href="" class="text-decoration-none">
                            <h1 class="m-0" style="color: #fff"><span class="ml-1"
                                    style="color:#FF6600">MENTOR</span>HUB</h1>
                        </a>

                    </div>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    {{-- <ul class="navbar-nav ms-auto d-flex align-items-center">
                       
                       
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Steave</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul> --}}
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" style="padding-top: 15%;">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-4 mb-4">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard"
                                aria-expanded="false" style="font-size: 20px;">
                                <i class="far fa-clock" aria-hidden="true" style="font-size: 20px;"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item mb-4">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin_profile"
                                aria-expanded="false" style="font-size: 20px;">
                                <i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>


                        <li class="sidebar-item mb-4">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/mentors"
                                aria-expanded="false" style="font-size: 20px;">
                                <i class="fa fa-users" aria-hidden="true" style="font-size: 20px;"></i>
                                <span class="hide-menu">Mentors</span>
                            </a>
                        </li>


                        <li class="sidebar-item mb-4">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/category"
                                aria-expanded="false" style="font-size: 20px;">
                                <i class="fa fa-table" aria-hidden="true" style="font-size: 20px;"></i>
                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>

                        <li class="sidebar-item mb-4">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/app"
                                aria-expanded="false" style="font-size: 20px;">
                                <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 20px;"></i>
                                <span class="hide-menu">Applications</span>
                            </a>
                        </li>

                        <li class="sidebar-item mb-4">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/post"
                                aria-expanded="false" style="font-size: 20px;">
                                <i class="fa fa-comment" aria-hidden="true" style="font-size: 20px;"></i>
                                <span class="hide-menu">Posts</span>
                                {{-- <i class="fa fa-question" aria-hidden="true" style="font-size: 20px;"></i> --}}
                                {{-- <span class="hide-menu">Questions</span> --}}
                            </a>
                        </li>


                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>



        <div>
            @yield('content')
        </div>



        {{-- &copy;Mentor Hub. All Rights Reserved. Designed by 
                        Mentor Hub Team --}}
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            <p style="margin-left: 10%;"><span style="color: orange;">Mentor Hub</span> &copy; All Rights Reserved.
                Designed by
                <span style="color: orange;"> Mentor Hub Team </span>
            </p>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>