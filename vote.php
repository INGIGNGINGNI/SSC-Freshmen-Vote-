<?php 
    session_start();
   
    require_once "config/connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSC - Vote</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Contestant</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">View profile</h6>
                        <a class="collapse-item" href="showboy.php">Freshmen Boy</a>
                        <a class="collapse-item" href="showgirl.php">Freshmen Girl</a>
                        <a class="collapse-item" href="showmissile.php">Missile</a>
                    </div>
                </div>
            </li>

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
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <?php if (isset($_SESSION['success']))?>
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">USER <?php echo $_SESSION['username'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">การโหวต</h1>
                    <p class="mb-2">ร่วมโหวตผู้เข้าประกวดที่คุณชื่นชอบ เพื่อให้ผู้เข้าประกวดคนนั้นได้รับรางวัล Popular vote 
                        และผ่านเข้าสู่รอบ Fasttrack โดยอัตโนมัติ</p>
                    <p class="p">โดยผู้ใช้งาน 1 คนสามารถโหวตได้ 1 ครั้งเท่านั้น (รวมการโหวตทั้ง Freshmen Boy & Girl และ Missile)</p>
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Vote here</h6>
                                </div>
                                <div class="card-body">
                                    <form action="vote_db.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="stdid" class="col-form-label">รหัสนิสิต :</label>
                                            <input type="text" maxlength="9" required class="form-control" name="stdid"
                                            onKeyUp="if(this.value*1!=this.value) this.value='' ;">
                                        </div>
                                        <div class="mb-3">
                                            <label for="bvote" class="col-form-label">โหวต Freshmen Boy :</label>
                                            <select name="bvote" class="dropdown-item">
                                                <option value="">เลือกหมายเลข</option>
                                                <option value="B3">B3 : เค ธนพล เพชรกาศ</option>
                                                <option value="B4">B4 : เท็น กิตติกวิน สีสอาด</option>
                                                <option value="B5">B5 : แก๊ป นริศฐิพงศ์ อุดมพาณิชกุล</option>
                                                <option value="B8">B8 : ภูมิ ภูมิภัทร บุญมี</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="gvote" class="col-form-label">โหวต Freshmen Girl :</label>
                                            <select name="gvote" class="dropdown-item">
                                                <option value="">เลือกหมายเลข</option>
                                                <option value="G1">G1 : มิว สโรชา อินทรวิมล</option>
                                                <option value="G2">G2 : แก้ม นุชณภัทร หนูเจริญ</option>
                                                <option value="G3">G3 : แตงโม พรวิสาข์ ปรีชา </option>
                                                <option value="G4">G4 : จุ๊งจิ๊ง นวรัตน์ จิตรอักษร</option>
                                                <option value="G5">G5 : พิ้งค์ สิริวรรณ สินตุ้น</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="svote" class="col-form-label">โหวต Missile :</label>
                                            <select name="svote" class="dropdown-item">
                                                <option value="">เลือกหมายเลข</option>
                                                <option value="S1">S1 : นัท จิราพันธ์ รัตนผล</option>
                                                <option value="S4">S4 : บาน ภานุภัทร หลงรักษ์</option>
                                                <option value="S5">S5 : มิ กฤติกา นรากิจ</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-success">Vote</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Contestant Freshmen Boy 2021</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row py-2">
                                        <?php 
                                            $stmt = $conn->query("SELECT * FROM freshmen_boy");
                                            $stmt->execute();
                                            $conts = $stmt->fetchAll();
                                            foreach($conts as $cont)  {  
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="text-s font-weight-bold text-primary mb-1">
                                            <?php echo $cont['fos']; ?></div>
                                            <img src="dashboard/uploads/<?php echo $cont['img']; ?>" width="80%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 ml-5">
                                                <?php echo $cont['position'];?> <?php echo $cont['nickname'];?></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Contestant Freshmen Girl 2021</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row py-2">
                                        <?php 
                                            $stmt = $conn->query("SELECT * FROM freshmen_girl");
                                            $stmt->execute();
                                            $conts = $stmt->fetchAll();
                                            foreach($conts as $cont)  {  
                                        ?>
                                        <div class="col-sm-3 mb-4">
                                            <div class="text-s font-weight-bold text-primary mb-1">
                                            <?php echo $cont['fos']; ?></div>
                                            <img src="dashboard/uploads/<?php echo $cont['img']; ?>" width="80%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 ml-5">
                                                <?php echo $cont['position'];?> <?php echo $cont['nickname'];?></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Contestant Missile 2021</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row py-2">
                                        <?php 
                                            $stmt = $conn->query("SELECT * FROM missile");
                                            $stmt->execute();
                                            $conts = $stmt->fetchAll();
                                            foreach($conts as $cont)  {  
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="text-s font-weight-bold text-primary mb-1">
                                            <?php echo $cont['fos']; ?></div>
                                            <img src="dashboard/uploads/<?php echo $cont['img']; ?>" width="80%"></img>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 mt-4 ml-5">
                                                <?php echo $cont['position'];?> <?php echo $cont['nickname'];?></div>
                                        </div>
                                        <?php } ?>
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
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
                if (file) {
                    previewImg.src = URL.createObjectURL(file)
            }
        }

        $('.delete-btn').click(function(e){
            var id = $(this).data('id');
            e.preventDefault();
            deleteConfirm(id);
        });

        function deleteConfirm(id){
            Swal.fire({
                title: 'Are you sure ?',
                text: 'It will be deleted permanently!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it !',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise(function(resolve) {[
                        $.ajax( {
                            url: 'freshmenboy.php',
                            type: 'GET',
                            data: 'delete=' + id
                        })
                        .done(function() {
                            Swal.fire({
                                title: 'Success',
                                text: 'Data deleted successfully',
                                icon: 'success'
                            }).then(() => {
                                document.location.href = 'freshmenboy.php';
                            })
                        })
                        .fail(function() {
                            Swal.fire('Oops...', 'Something went wrong with ajax!', 'error');
                            window.location.reload();
                        })
                    ]})
                }
            })
        }
    </script>

</body>

</html>