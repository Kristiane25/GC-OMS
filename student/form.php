<?php

  session_start();  
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>GC-OMS | Admin</title>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />





    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="..\assets\img\logo\gcoms.png">

</head>


<body class="fixed-left">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand text-center font-weight-normal" href="index.php"><button class="btn btn-link btn-sm order-1 order-lg-0 me-0 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i></button>GC - OMS</a>
        <!-- Sidebar Toggle-->
        <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-0 me-lg-0" id="sidebarToggle" href="#!"> -->
        <!-- <i class="fas fa-bars"></i></button> -->
        <!-- Navbar Search-->
        <div>
            <h4 class="m-t-10 m-l-20 header-title">Edit Company Information</h4>
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
                        <a href="index.php"><img class="userpic" src="assets/images/\users/user.jpg"
                                style="width:90px;height:90px;"></a>
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

            <div class="card-box">
                <h4 class="m-t-0 header-title">Company Information</h4>

                <div class="row">
                    <div class="col-12">
                        <div class="p-20">
                            <form class="form-horizontal" role="form" method="POST" action="process_form.php">

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Company Name</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="company_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Company Supervisor</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control" name="company_supervisor">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Company Address</label>
                                    <div class="col-10">
                                        <textarea class="form-control" rows="5" name="company_address"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Company Contact No.</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="tel" name="company_contact_no">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Company Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" name="company_email"">
                                    </div>
                                </div>

                                <button type=" submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>

            <!-- <div class="container-fluid px-1">
                <div class="container-fluid px-1">
                            <h1 class="mt-4">My Class <i class="fas fa-laptop"></i></h1>
                            Navbar Search-->
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

            <!-- </div>  -->

            <!-- <div class="content-page">


                <div class="content">

                    <div class="row">
                        <div class="col-lg-12"> -->


            <div class="container">
                <!-- <div class="table-container">
                    <div class="table-responsive table-striped">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Program</th>
                                    <th>Email</th>
                                    <th>Contact #</th>
                                    <th>Company Name</th>
                                    <th>Company Address</th>
                                    <th>Company Contact #</th>
                                    <th>Company Email</th>
                                    <th>Company Supervisor</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    // $con = mysqli_connect('localhost', 'root', '', 'u_reg');

                    // $adviser_id = $_SESSION['adv_no'];
                    // $adviser_query = "SELECT program FROM adv_login WHERE adv_no = $adviser_id";
                    // $adviser_result = mysqli_query($con, $adviser_query);
                    // $adviser_row = mysqli_fetch_array($adviser_result);
                    // $program = $adviser_row['program'];

                    // $que = "SELECT * FROM stud_login WHERE program = '$program'";
                    // $run = mysqli_query($con, $que);

                    // while ($row = mysqli_fetch_array($run)) {
                    //     $u_id = $row['u_id'];
                    //     $name = $row[0];
                    //     $program = $row[1];
                    //     $email = $row[2];
                    //     $contact_no = $row[4];
                    //     $company_name = $row[5];
                    //     $company_address = $row[6];
                    //     $company_contact_no = $row[7];
                    //     $company_email = $row[8];
                    //     $company_supervisor = $row[9];
                    // ?>
                    //             <tr>
                    //                 <td><?php echo $u_id; ?></td>
                    //                 <td><?php echo $name; ?></td>
                    //                 <td><?php echo $program; ?></td>
                    //                 <td><?php echo $email; ?></td>
                    //                 <td><?php echo $contact_no; ?></td>
                    //                 <td><?php echo $company_name; ?></td>
                    //                 <td><?php echo $company_address; ?></td>
                    //                 <td><?php echo $company_contact_no; ?></td>
                    //                 <td><?php echo $company_email; ?></td>
                    //                 <td><?php echo $company_supervisor; ?></td>
                                    <td>
                                        <form id="uploadForm" action="view.php" method="POST"
                                            enctype="multipart/form-data" onsubmit="return validateForm()">
                                            <input type="file" name="file">
                                            <input type="hidden" name="id" value="<?php echo $u_id; ?>"> 
                                            <input type="submit" value="Upload" id="upload-button">
                                        </form>

                                        <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                                            aria-labelledby="successModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="successModalLabel">Success</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <!-- <span aria-hidden="true">&times;</span> 
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-white">
                                                        The file has been successfully uploaded.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        Error Modal -->
                <!-- <div class="modal fade" id="errorModal" tabindex="-1" role="dialog"
                                            aria-labelledby="errorModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="errorModalLabel">Error</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button> -->
                <!-- </div>
                                                    <div class="modal-body">
                                                        An error occurred during file upload.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr> -->
                <?php ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- <div class="content-page">
        Start content 
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Input Types</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Text</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" value="Some text value...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="example-email">Email</label>
                                                <div class="col-10">
                                                    <input type="email" id="example-email" name="example-email"
                                                        class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Password</label>
                                                <div class="col-10">
                                                    <input type="password" class="form-control" value="password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Placeholder</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" placeholder="placeholder">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Text area</label>
                                                <div class="col-10">
                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Readonly</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" readonly=""
                                                        value="Readonly value">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Disabled</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" disabled=""
                                                        value="Disabled value">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Static control</label>
                                                <div class="col-10">
                                                    <p class="form-control-static">email@example.com</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Helping text</label>
                                                <div class="col-10">
                                                    <input type="text" class="form-control" placeholder="Helping text">
                                                    <span class="help-block"><small>A block of help text that breaks
                                                            onto a new line and may extend beyond one
                                                            line.</small></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Input Select</label>
                                                <div class="col-10">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    <h6>Multiple select</h6>
                                                    <select multiple class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Default file input</label>
                                                <div class="col-10">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Date</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="date" name="date">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Month</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="month" name="month">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Time</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="time" name="time">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Week</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="week" name="week">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Number</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="number" name="number">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">URL</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="url" name="url">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Search</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="search" name="search">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Tel</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="tel" name="tel">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Color</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="color" name="color">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Range</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="range" name="range" min="0"
                                                        max="10">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            end row

                        </div> end card-box 
                    </div>end col
                </div>
                end row -->


    <!-- <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="m-t-0 header-title">Select menu</h4>


                                    <select class="custom-select mt-3">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>


                                </div>

                                <div class="col-md-6">
                                    <h4 class="header-title">Checkboxes and radios</h4>
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Check this custom
                                                checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Check this custom
                                                checkbox</label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Toggle this custom
                                                radio</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Or toggle this other
                                                custom radio</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> end card-box -->
    </div> <!-- end col -->
    </div>
    <!-- end row -->


    <!-- <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Input Sizes & Group</h4>


                            <div class="p-20">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="example-input-small">Small</label>
                                        <div class="col-10">
                                            <input type="text" id="example-input-small" name="example-input-small"
                                                class="form-control form-control-sm" placeholder=".input-sm">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="example-input-normal">Normal</label>
                                        <div class="col-10">
                                            <input type="text" id="example-input-normal" name="example-input-normal"
                                                class="form-control" placeholder="Normal">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label" for="example-input-large">Large</label>
                                        <div class="col-10">
                                            <input type="text" id="example-input-large" name="example-input-large"
                                                class="form-control form-control-lg" placeholder=".input-lg">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Grid Sizes</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" placeholder=".col-sm-4">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Static</label>
                                        <div class="col-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Dropdowns</label>
                                        <div class="col-10">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <button
                                                        class="btn btn-primary waves-effect waves-light dropdown-toggle"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Dropdown</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div role="separator" class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="" aria-label=""
                                                    aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Buttons</label>
                                        <div class="col-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Recipient's username" aria-label="Recipient's username"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-dark waves-effect waves-light"
                                                        type="button">Button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div> end card-box
                    </div> end col
                </div>
                end row -->


    <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-30 header-title">Basic Example</h4>

                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox">
                                        <label for="checkbox0">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    end col

                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-30 header-title">Horizontal form</h4>

                            <form class="form-horizontal" role="form">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                    <div class="col-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                    <div class="col-9">
                                        <input type="password" class="form-control" id="inputPassword3"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                    <div class="col-9">
                                        <input type="password" class="form-control" id="inputPassword5"
                                            placeholder="Retype Password">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class=" col-9">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2">
                                                Check me out !
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 justify-content-end row">
                                    <div class="col-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Sign
                                            in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                end row -->


    <!-- Inline Form
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Inline Form</h4>

                            <div class="row m-b-30">
                                <div class="col-sm-12">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label for="staticEmail2" class="sr-only">Email</label>
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                                                value="email@example.com">
                                        </div>
                                        <div class="form-group mx-sm-3">
                                            <label for="inputPassword2" class="sr-only">Password</label>
                                            <input type="password" class="form-control" id="inputPassword2"
                                                placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Confirm identity</button>
                                    </form>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-12">
                                    <h6 class="font-13 mt-4">Auto-sizing</h6>

                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInput">Name</label>
                                                <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                    placeholder="Jane Doe">
                                            </div>
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup"
                                                        placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="autoSizingCheck">
                                                    <label class="form-check-label" for="autoSizingCheck">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                end row -->



    <!-- Form row
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Form row</h4>


                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="col-form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity" class="col-form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState" class="col-form-label">State</label>
                                        <select id="inputState" class="form-control">Choose</select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip" class="col-form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Check me out
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
                end row -->

    </div> <!-- container -->

    </div> <!-- content -->

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="mdi mdi-close-circle-outline"></i>
        </a>
        <h4 class="">Notifications</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">Michael Zenaty</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">2 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-info">
                            <i class="mdi mdi-account"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">New Signup</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">5 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-pink">
                            <i class="mdi mdi-comment"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">New Message received</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">1 day ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">James Anderson</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">2 days ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-warning">
                            <i class="mdi mdi-settings"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">Settings</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">1 day ago</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



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

</body>

</html>