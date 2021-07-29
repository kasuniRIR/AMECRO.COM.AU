<?php include '../database/connection.php'; ?>
<?php include '../admin/php_code.php'; ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html>

<head>

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>View Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin//styles//sb-admin-2.min.css" rel="stylesheet">

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

    .des {
        width: 100%;
        table-layout: auto;
    }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminPanel.php">
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
                <a class="nav-link collapsed" href="medicalDashboard.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Environmental Solution</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="medicalDashboard.php">
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
                <a class="nav-link" href="viewMedicalDashboard.php">
                    <i class="fas fa-eye"></i>
                    <span>View Environmental</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewMedicalDashboard.php">
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

                <center>
                    <h1 class="h3 mb-1 text-gray-800">View Vehicles</h1>
                </center><br>

                <center>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Product Feature</th>
                                    <th>TableTop</th>
                                    <th>ElevationTable</th>
                                    <th>ElevationChair</th>
                                    <th>Max Load</th>
                                    <th>Elevation Phoropteraram</th>
                                    <th>Phoropter Rotation</th>
                                    <th>Table Rotation</th>
                                    <th>Charging Port</th>
                                    <th>Top Lamp</th>
                                    <th>Fuse</th>
                                    <th>Voltage</th>
                                    <th>Input Power</th>
                                    <th>Table Weight</th>
                                    <th>Chair Weight</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $i   = 1;
                            $qry = "select * from medical";
                            $run = $db->query($qry);
                            if ($run->num_rows > 0) {
                                while ($row = $run->fetch_assoc()) {
                                    $id = $row['m_id'];
                            ?>

                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo '<img src="upload/medical/' . $row['img'] . '" width = "70px;" height = "60px;" alt = "Image">' ?>
                                </td>
                                <td><?php echo $row['prdName']; ?></td>
                                <td><?php echo $row['prdFeature']; ?></td>
                                <td><?php echo $row['tableTop']; ?></td>
                                <td><?php echo $row['elevationTable']; ?></td>
                                <td><?php echo $row['elevationChair']; ?></td>
                                <td><?php echo $row['maxLoad']; ?></td>
                                <td><?php echo $row['elevationPhoropterarm']; ?></td>
                                <td><?php echo $row['phoropterRotation']; ?></td>
                                <td><?php echo $row['tableRotation']; ?></td>
                                <td><?php echo $row['chargingPort']; ?></td>
                                <td><?php echo $row['topLamp']; ?></td>
                                <td><?php echo $row['fuse']; ?></td>
                                <td><?php echo $row['voltage']; ?></td>
                                <td><?php echo $row['inputPower']; ?></td>
                                <td><?php echo $row['tableWeight']; ?></td>
                                <td><?php echo $row['chairWeight']; ?></td>
                                <td>
                                    <a href="editMedicalDashboard.php?m_edit=<?php echo $row['m_id']; ?>"
                                        class="edit_btn"><i class="fas fa-edit" style="color:grey"></i></a>
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <a href="php_code.php?m_del=<?php echo $row['m_id']; ?>" class="del_btn"><i
                                            class="fa fa-trash" style="color:grey"></i></a>
                                </td>
                            </tr>

                            <?php ?>

                            <?php
                                }
                            }
                            ?>

                        </table>
                    </div>
                </center>

                <?php if (isset($_SESSION['message'])) : ?>
                <div class="msg">
                    <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                </div>
                <?php endif ?>

                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- prevent form resubmission -->
                <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>

                <!-- Core plugin JavaScript-->
                <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->


</body>

</html>