<?php include('../database/connection.php'); ?>
<?php include('../admin/php_code.php'); ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}
?>

<?php
if (isset($_GET['k_edit'])) {
    $id = $_GET['k_edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM kindergarten WHERE k_id=$id");
    if ($record->num_rows > 0) {
        while ($n = $record->fetch_assoc()) {
            $id   = $n['k_id'];
            $k_name = $n['k_name'];
            $k_no = $n['k_no'];
            $k_code = $n['k_size'];
            $k_weight = $n['k_weight'];
            $k_capacity = $n['k_capacity'];
            $k_size = $n['k_size'];
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
    form {
        width: 45%;
        margin: 50px auto;
        text-align: left;
        padding: 20px;
        border: 1px solid #bbbbbb;
        border-radius: 5px;
    }

    .msg {
        margin: 30px auto;
        padding: 10px;
        border-radius: 5px;
        color: #3c763d;
        background: #dff0d8;
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;
    }
    </style>

    <title>ADMIN PANEL - EDIT KINDERGARTEN SOLUTIONS</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin//styles//sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="../favamecro.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="medicalDashboard.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="medicalDashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ADMIN PANEL</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="medicalDashboard.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add Medical Furniture</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="environmentalDashboard.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Environmental Solution</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="kindergartenDashboard.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add Kindergarten Furniture</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="viewMedicalDashboard.php">
                    <i class="fas fa-eye"></i>
                    <span>View Medical Furniture</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewEnvironmentalDashboard.php">
                    <i class="fas fa-eye"></i>
                    <span>View Environmental</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewKindergartenDashboard.php">
                    <i class="fas fa-eye"></i>
                    <span>View Kindergarten</span>
                </a>
            </li>

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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="../images//admin-img.jpg">
                            </a>
                        </li>
                        <!--logout btn-->
                        <li class="nav-item dropdown no-arrow" style="padding-top:15px; ">
                            <a href="logout.php?logout" class="btn btn-outline-secondary" role="button"
                                aria-pressed="true"><i
                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                        </li>

                    </ul>

                </nav>

                <body>


                    <!-- Begin Page Content -->
                    <div class="container-fluid" style="width: 1300px;">
                        <!-- Page Heading -->
                        <center>
                            <h1 class="h3 mb-1 text-gray-800">Update Kindergarten</h1>
                        </center>

                        <form method="post" action="viewKindergartenDashboard.php">
                            <div class="row">
                                <div class="col-md-offset-1"><br>
                                    <div class="col-13">
                                        <label>Product Name</label>
                                        <input type="text" name="k_name" class="form-control"
                                            value="<?php echo $k_name ?>" required>
                                    </div><br>
                                    <div class="col-13">
                                        <label>Product Item No</label>
                                        <input type="text" name="k_no" class="form-control" value="<?php echo $k_no ?>">
                                    </div><br>
                                    <div class="col-13">
                                        <label>Product Code</label>
                                        <input type="text" name="k_code" class="form-control" value="<?php echo $k_code ?>">
                                    </div><br>
                                    <div class="col-13">
                                        <label>Net Weight (Kgs)</label>
                                        <input type="text" name="k_weight" class="form-control" value="<?php echo $k_weight ?>">
                                    </div><br>
                                    <div class="col-13">
                                        <label>Product Size</label>
                                        <input type="text" name="k_size" class="form-control" value="<?php echo $k_size ?>">
                                    </div><br>
                                    <div class="col-13">
                                        <label>Weight Capacity(Kgs)</label>
                                        <input type="text" name="k_capacity" class="form-control" value="<?php echo $k_capacity ?>">
                                    </div><br>
                                </div>
                            </div>
                            <input type="hidden" name="k_id" value="<?php echo $id; ?>">
                            <?php if ($update == true) : ?>
                            <button class="btn btn-primary" type="submit" name="k_update">update</button>
                            <?php else : ?>
                            <button class="btn" type="submit" name="kindergarten">Update</button>
                            <?php endif ?>


                    </div>

            </div>

            </form>

            <div class="card-body">
                <?php
                if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                    echo '<h2 class = "bg-primary text-white"> ' . $_SESSION['success'] . '</h2>';
                    unset($_SESSION['success']);
                }

                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                    echo '<h2 class = "bg-primary text-white"> ' . $_SESSION['status'] . '</h2>';
                    unset($_SESSION['status']);
                }

                ?>
            </div>

            <!-- Content Row -->
            <div class="row">

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

        <!-- Scroll to Top Button -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>