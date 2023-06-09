<?php 
    session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSC - Index</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div class="loader"></div>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Freshmen Vote <sup>by SSC</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="vote.php" ><i class="far fa-check-square"></i>
                    <span>Vote</span>
                </a>
                <!-- <a class="nav-link collapsed" href="order.php" ><i class="fas fa-shopping-cart"></i>
                    <span>Pre-Order T-shirt</span>
                </a> -->
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="showboy.php">
                                <img class="img-profile rounded-circle mx-2"
                                    src="img/undraw_profile.svg">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">Freshmen Boy</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="showgirl.php">
                                <img class="img-profile rounded-circle mx-2"
                                    src="img/undraw_profile_3.svg">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">Freshmen Girl</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="showmissile.php">
                                <img class="img-profile rounded-circle mx-2"
                                    src="img/undraw_profile_1.svg">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">missile</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                                <?php if (!isset($_SESSION['success']))?>
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">USER <?php echo $_SESSION['username'];?></span>
                                    <img class="img-profile rounded-circle"
                                        src="img/undraw_profile.svg">
                                </a>
                            
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="loginform.php?logout='1'" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                                </div>
                            </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ยินดีต้อนรับสู่เว็บไซต์</h1>
                        
                        <a href="vote.php" class="btn btn-primary btn-icon-split btn-lg">
                            <span class="icon text-white-50">
                                <i class="far fa-check-square"></i>
                            </span>
                            <span class="text">Vote here</span>
                        </a>
                    </div>

                    <!-- Content Row -->
                    <!-- <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Freshmen Boy</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-person fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Freshmen Girl</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-person-dress fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Missile
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-people fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    
                    <div class="row">
                    
                        <div class="col-xl-8 col-lg-3">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Freshmen Boy 2020</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               1ST Freshmen Boy</div>
                                            <img src="images/b1st.jpg" width="100%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 ml-4">ปลั๊ก ปัณวัฒน์ สุโขวัฒนกิจ</div>
                                        </div>
                                        <div class="col-sm">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                2ND Freshmen Boy</div>
                                            <img src="images/b2nd.jpg" width="100%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 mx-4">ปอนด์ ชานนท์ หงษ์ยนต์</div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">3RD Freshmen Boy </div>
                                            <img src="images/b3rd.jpg" width="100%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 mx-4">โจ้ ธนกฤต ยอดพรมทอง</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-xl-4 col-lg-3">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Missile 2020</h6>
                                    <div class="dropdown no-arrow">
                                    
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="col-sm">
                                    <center>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        1ST Missile</div>
                                    <img src="images/ms1st.jpg" width="72%"></img>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 ml-4">เอ๋ บัณฑิตา แก้วฉาง</div>
                                    </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-3">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Freshmen Girl 2020</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            1ST Freshmen Girl</div>
                                            <img src="images/g1st.jpg" width="100%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 ml-4">อาย อินทิรา ล่วงห้อย</div>
                                            
                                        </div>
                                        <div class="col-sm">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                2ND Freshmen Girl</div>
                                            <img src="images/g2nd.jpg" width="100%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 mx-4">ษา อลิษา คงทอง</div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">3RD Freshmen Girl </div>
                                            <img src="images/g3rd.jpg" width="100%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 mx-4">นุ่น สุจิรา นันตากาศ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Science Student Club 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Press Logout below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="loginform.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>