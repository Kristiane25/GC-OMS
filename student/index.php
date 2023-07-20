<?php
  session_start();  
?>
<?php
include 'connection.php';
 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GC-OMS | Students</title>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-x1BmVpb5xdYrxAymzFhsP/2b8/2bmm8YDvLP1Wld6zTJjqFgJmD4sJlPIS2WNQERcbhwC5Bko87SkRbp7aR3Iw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../assets/img/logo/gcoms.png">

</head>

<body class="sb-nav-fixed bg-light">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand text-center font-weight-normal" href="index.php"><button
                class="btn btn-link btn-sm order-1 order-lg-0 me-0 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i></button>GC - OMS</a>
        <!-- Sidebar Toggle-->
        <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-0 me-lg-0" id="sidebarToggle" href="#!"> -->
        <!-- <i class="fas fa-bars"></i></button> -->
        <!-- Navbar Search-->
        <div>
            <h4 class="m-t-10 m-l-20 header-title">Dashboard</h4>
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
                        <img class="userpic" src="assets/images/\users/user.jpg" style="width:90px;height:90px;">
                        <a id="department" class="nav-link text-center" href="form.php"> &nbsp; &nbsp; &nbsp;
                            <?php echo $_SESSION['name']; ?>
                            <br><?php echo $_SESSION['program']; ?></a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="form.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                            Edit Company Information
                        </a>
                        <a href="#" class="dropdown-btn nav-link" style="background-color: transparent" ;>
                            <div class="sb-nav-link-icon"><i class="fas fa-laptop"></i></div>
                            Log &nbsp; <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-container sb-nav-link-icon" style="background-color: transparent">
                            <a class="nav-link" href="daily_log_start.php" onclick="showPopup('start')">Start</a>
                            <a class="nav-link" href="daily_log_end.php" onclick="showPopup('end')">End</a>

                        </div>
                        <!-- <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                            Announcement
                        </a> -->

                        <a class="text-black btn btn-lg btn-primary" href="logout.php"><i
                                class="mr-2 fas fa-sign-out"></i>LOGOUT</a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-1">
                    <!-- <div class="container-fluid px-1"> -->
                    <h1 class="mt-4 text-black">My Class <i class="fas fa-laptop"></i></h1>
                    <!-- Navbar Search-->
                    <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..."
                                    aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-warning" id="btnNavbarSearch" type="button"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form> -->
                    <!-- <ol class="breadcrumb mb-4">
                            <br>
                            <br>
                        </ol> -->
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6" style="width: 22rem;">
                        <div class="card bg-orange text-white mb-4">
                            <div class="card-body">Class Code: 31880</div>
                            <h5 class="small text-dark">&nbsp; &nbsp;IT PRACTICUM 1</h5>
                            <p class="small text-dark">&nbsp; &nbsp; Sat 10:00AM - 12:00PM</p>
                            <p class="small text-dark">&nbsp; &nbsp; ROOM 508/OL</p>
                            <br>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-dark stretched-link" href="form.php">View Class</a>
                                <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-3 col-md-6" style="width: 22rem;">
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
                        </div> -->
                    <!-- <div class="col-xl-3 col-md-6" style="width: 22rem;">
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
                        </div> -->


                </div>

        </div>
        </main>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <script>
        // Indent submenus
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });

            // Indent submenus
            var submenu = dropdown[i].nextElementSibling;
            submenu.style.marginLeft = "20px";
            submenu.style.display = "none";
        }
    </script>

    <script>
        function showPopup(action) {
            // Create a new popup element
            var popup = document.createElement("div");
            popup.classList.add("popup");
            var message = "";

            if (action === "start") {
                message = "OJT session started.";
            } else if (action === "end") {
                message = "OJT session ended.";
            } else {
                message = "error";
            }

            popup.innerHTML = message;

            // Add some basic styles to the popup
            popup.style.position = "fixed";
            popup.style.top = "10%";
            popup.style.left = "50%";
            popup.style.transform = "translate(-50%, 10%)";
            popup.style.width = "200px"; // Set the width to 300 pixels
            popup.style.height = "50px";
            popup.style.padding = "10px";
            popup.style.backgroundColor = "#ffffff";
            popup.style.border = "1px solid #cccccc";
            popup.style.borderRadius = "5px";
            popup.style.boxShadow = "0px 2px 5px rgba(0, 0, 0, 0.2)";
            popup.style.zIndex = "9999";
            popup.style.fontSize = "18px";
            popup.style.textAlign = "center";
            popup.style.display = "flex"; // Set the popup as a flex container
            popup.style.alignItems = "center";

            // Add the popup to the document body
            document.body.appendChild(popup);

            // Remove the popup after a short delay (e.g., 3 seconds)
            setTimeout(function () {
                popup.remove();
            }, 5000);
        }
    </script>
</body>

</html>