<?php
  session_start();  
?>
<?php
include 'connection.php'; 
 ?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GC-OMS | Adviser</title>

    <!-- App css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <script src="js/modernizr.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed bg-light">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand text-center font-weight-normal" href="index.php">GC - OMS</a>
        <!-- Sidebar Toggle-->
        <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-0 me-lg-0" id="sidebarToggle" href="#!"> -->
            <!-- <i class="fas fa-bars"></i></button> -->
        <!-- Navbar Search-->
        <div>
            <h4 class="m-t-10 m-l-50 header-title">Dashboard</h4>
        </div>
        <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="time">
                <h5> <i class="fa fa-calendar" aria-hidden="true"></i> <span id="time"> </span></h5>
            </div>
        </form> -->
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                <div class="nav">
                        <a href="index.php"><img class="userpic" src="assets/img/user.jpg"
                                style="width:90px;height:90px;"></a>
                        <a id="department" class="nav-link" href="index.php"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION['adv_name']; ?>
                            <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $_SESSION['program']; ?></a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                            Classes
                        </a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                            Announcement
                        </a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-message"></i></div>
                            Forums
                        </a>

                        <button class="signoutbtn" id="btnNavbarSearch" type="button">
                            <a class="text-black" href="logout.php"><i class="fas fa-sign-out"></i></a>
                        </button>
                        <br>
                        <br>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-1">
                    <div class="container-fluid px-1">
                        <h1 class="mt-4 text-black">My Class <i class="fas fa-laptop"></i></h1>
                        <!-- Navbar Search-->
                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..."
                                    aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-warning" id="btnNavbarSearch" type="button"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                        <ol class="breadcrumb mb-4">
                            <br>
                            <br>
                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6" style="width: 22rem;">
                            <div class="card bg-orange text-white mb-4">
                                <div class="card-body">Class Code: 31880</div>
                                <h5>&nbsp; &nbsp;IT PRACTICUM 1</h5>
                                <p>&nbsp; &nbsp; Sat 10:00AM - 12:00PM</p>
                                <p>&nbsp; &nbsp; ROOM 508/OL</p>
                                <br>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6" style="width: 22rem;">
                            <div class="card bg-orange text-white mb-4">
                                <div class="card-body">Class Code: 31880</div>
                                <h5>&nbsp; &nbsp;IT PRACTICUM 1</h5>
                                <p>&nbsp; &nbsp; Sat 10:00AM - 12:00PM</p>
                                <p>&nbsp; &nbsp; ROOM 508/OL</p>
                                <br>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6" style="width: 22rem;">
                            <div class="card bg-orange text-white mb-4">
                                <div class="card-body">Class Code: 31880</div>
                                <h5>&nbsp; &nbsp;IT PRACTICUM 1</h5>
                                <p>&nbsp; &nbsp; Sat 10:00AM - 12:00PM</p>
                                <p>&nbsp; &nbsp; ROOM 508/OL</p>
                                <br>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </main>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/detect.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/jquery.blockUI.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.js"></script>
    <script src="js/jquery.core.js"></script>
    <script src="js/jquery.app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>