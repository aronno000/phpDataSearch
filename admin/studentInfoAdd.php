<?php
session_start();

// Check if the user is authenticated as an admin
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: index.php'); // Redirect to the login page if not authenticated
    exit();
}
?>

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
    <title>Student Info</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/Queeny-Pink-icon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
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
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="#" style="text-align:center;margin-left:20px;margin-top:10px;">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="https://queenybd.com/wp-content/uploads/2023/09/Queeny-Black.svg" alt="homepage" width="100px" />
                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="img/admin.jpg" alt="user-img" width="36" class="img-circle" style="border-radius: 50%;">
                                Admin
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                              </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
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
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="adminPanel.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">All Students</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="studentInfoAdd.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Add Student Info</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Add Student Info</h3>
                            
                            <form method="post" action="studentInfoAddProcess.php" enctype="multipart/form-data">

                            <div class="mb-3 row">
                                <label for="profileImg" class="col-sm-2 col-form-label">Student Image</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="profileImg" name="profileImg" accept=".png, .jpg, .jpeg" required>
                                </div>
                            </div>

						    <div class="input-group">
						        <input type="hidden" name="id" value="">
						    </div>

                            <div class="mb-3 row">
                                <label for="studentId" class="col-sm-2 col-form-label">Student ID</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="studentId" name="student_id" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="studentName" class="col-sm-2 col-form-label">Student Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="studentName" name="student_name" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="trainerName" class="col-sm-2 col-form-label">Trainer Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="trainerName" name="trainer_name" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="institutionName" class="col-sm-2 col-form-label">Institution Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="institutionName" name="institution_name" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="courseTitle" class="col-sm-2 col-form-label">Course Title</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="courseTitle" name="course_title" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="courseDetails" class="col-sm-2 col-form-label">Course Details</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" id="courseDetails" name="course_details" required></textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="courseDuration" class="col-sm-2 col-form-label">Course Duration (days)</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="courseDuration" name="course_duration" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="courseStartDate" class="col-sm-2 col-form-label">Course Start Date</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="courseStartDate" name="course_start_date" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="courseCompletionDate" class="col-sm-2 col-form-label">Course Completion Date</label>
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="courseCompletionDate" name="course_completion_date" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="certificateImage" class="col-sm-2 col-form-label">Certificate Image</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="certificateImage" name="certificateImageStudent" required>
                                </div>
                            </div>

						        <input type="submit" name="save" value="Save">
						    </form>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2023 © All rights reserved by <a
                    href="https://queenybd.com/" target="_new">Queeny Limited</a>
            </footer>
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
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>