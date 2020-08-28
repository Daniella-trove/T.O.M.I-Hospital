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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Doc site</title>
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
   
</head>

<body>

    <?php
session_start();
    ?>
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/Neon Free Mock-up.png" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo icon -->
                            <img src="assets/images/Neon Free Mock-up.png" alt="homepage" class="light-logo" style="width: 50px; height: 50px;" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Update your profile</a>
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
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium"><?php echo $_SESSION['fullName']; ?> <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?php echo $_SESSION['email']; ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Update your profile</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="docdashboard.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Appointment</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="docprofile.php" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dochistory.php" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span class="hide-menu">History</span></a></li>
                        <li class="text-center">
                            <a href="doclogout.php" class="btn btn-block btn-danger text-white">Log Out</a>
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
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                  </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h5 class="card-subtitle">Welcome to T.O.M.I Hospital</h5>
                                        <h4 class="card-title">Your Appointment with Patient</h4>
                                    </div>
                                </div>
                                <!-- title -->
                                   <?php
                                   $admin_id=$_SESSION['admin_id'];
                                      include "connection.php";                               
                                   $sql="select * from matching,users,appointment where matching.user_id=appointment.user_id and matching.user_id=users.user_id and matching.admin_id='$admin_id'";
                                   $dbc=mysqli_query($con,$sql);

                                    // if dbc is successful
                    if ($dbc) {
                        
                        // if dbc is empty
                        if ($dbc->num_rows==0) {
                            echo "<h5>You have no booked appointment with a Patient!</h5>";
                        }

                        //if doctors appointment
                        else{
                                $count=1;
                            echo "<table class='table table-bordered table-striped table-hover'>";
                            echo "<thead><th>S/N</th><th>Patient Name</th><th>Reason</th><th>Age</th><th>Date Schedule</th><th>Status</th><th>Action</th></thead>";
                            while ($row=mysqli_fetch_array($dbc)) {
                                $newDate=date("j, F Y H:i a",strtotime($row['date']));
                                $app_id=$row['app_id'];
                                echo "<tr>";
                                echo "<td>" .$count."</td>";
                                 echo "<td>" .$row['fullname'].  "</td>";
                                echo "<td>" .$row['reason'].  "</td>";
                                echo "<td>" .$row['age'].  "</td>";
                                echo "<td>" .$newDate.  "</td>";
                                echo "<td>";
                                if ($row['status']==0) {
                                    echo "<p id='a{$app_id}'>Pending</p>";
                                }
                                elseif ($row['status']==2) {
                                    echo "<p id='a{$app_id}'>Reschedule appointment</p>";
                                }
                                else{
                                    echo "<p id='a{$app_id}'>Approved</p>";
                                }
                                echo "</td>";
                                 echo "<td> <button class='btn btn-primary' onclick='update({$app_id})'>Update</button> </td>";
                                echo "</tr>";
                                
                                $count++;
                                
                            }
                        }
                         
                    }
                    //if dbc is unsuccessful
                            else{
                        echo mysqli_error($con);
                    }
                                   ?>                             
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by DT Xtreme 2020.
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
    <script src="js/jquery-1.11.3.min"></script>
    <script src="java.js"></script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>