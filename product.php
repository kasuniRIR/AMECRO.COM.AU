<?php
include('./database/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html 5 template, cleaning service template, cleaning template, cleaning company template">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="favamecro.ico">
    <title>AMECRO - Product Page</title>
    <!-- Vendors -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/animate.min.css" rel="stylesheet">
    <link href="css/vendor/slick.css" rel="stylesheet">
    <link href="css/vendor/lightbox.css" rel="stylesheet">
    <link href="css/vendor/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/vendor/nouislider.css" rel="stylesheet">
    <!-- Template Style -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Icon Font-->
    <link href="fonts/icomoon/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
</head>

<body class="page-shop">
    <div class="loading-content">
        <div class="loaded-text" data-text="AMECRO">
            AMECRO
        </div>
    </div>
    <!-- Header -->
    <?php
    include('./inc/header.php')
    ?>
    <!-- /Header -->
    <main class="page-main">
        <!-- Breadcrumbs Block -->
        <div class="block breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Our Shop</li>
                </ul>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->
        <div class="block">
            <div class="container">
                <h1 class="text-center h-decor">Product Range</h1>
                <div class="row">
                    <div class="col-md-4 col-lg-3 column-filters">
                        <div class="column-filters-inside" style="width: 280px;">
                            <div class="side-block" style="width: 350px;">
                                <h3>Categories</h3>
                                <ul class="category-list">
                                    <li><a href="product.php?page=environment">Environmental Solutions</a></li>
                                    <li><a href="product.php?page=medical">Medical Furniture Solutions</a></li>
                                    <li><a href="product.php?page=kindergarten">Kindergarten Furniture Solutions</a></li>
                                </ul>
                            </div>
                            <!-- <div class="side-block">
                                <h3>Price</h3>
                                <div class="range">
                                    <div id="rangeSlider1"></div>
                                    <p>Price: $<span id="number-1-2"></span> - $<span id="number-1-1"></span></p>
                                </div>
                            </div> -->
                            <div class="side-block" style="width: 350px;">
                                <h3>Popular Products</h3>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="product.php"><img src="images/outdoor-bin.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="product.php">Outdoor Bin</a></h3>
                                        <div class="price">$2.99</div>
                                    </div>
                                </div>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="product.php"><img src="images/medical-table.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="product.php">Medical Table</a></h3>
                                        <div class="price">$2.11</div>
                                    </div>
                                </div>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="product.php"><img src="images/kids-chair.png" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="product.php">Kids Chair</a></h3>
                                        <div class="price">$9.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                            if ($page == 'environment') {
                        ?>
                                <div class="filters-row">
                                    <div class="filters-row-left"><span>Environmental Solutions</span>
                                        <div class="form-inline">
                                        </div>
                                    </div>
                                </div>

                                <div class="prd-grid">
                                    <?php
                                    // environmental
                                    $query = "SELECT * FROM environmental";
                                    $data  = mysqli_query($db, $query) or die('error');

                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $id     = $row['e_id'];
                                            $eName  = $row['e_name'];
                                            $eModel  = $row['e_model'];
                                            $eSize  = $row['e_size'];
                                            $img    = $row['img'];
                                            $type = $row['type'];
                                    ?>
                                            <div class="prd">
                                                <div class="prd-img">
                                                    <a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>"><?php echo '<img src="./admin/upload/environmental/' . $img . '" alt="">' ?></a>
                                                </div>
                                                <div class="prd-info">
                                                    <h3><a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>"><?php echo $eName ?></a></h3>
                                                    <!-- <h3><?php echo $eModel ?></h3>
                                                        <h3><?php echo $eSize ?></h3> -->
                                                    <a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>" class="btn"><i class="icon-market"></i>Get a Quote</a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }

                                    ?>
                                </div>

                            <?php
                            } else if ($page == 'medical') {
                            ?>

                                <div class="filters-row">
                                    <div class="filters-row-left"><span>Medical Furniture Solutions</span>
                                        <div class="form-inline">
                                        </div>
                                    </div>
                                </div>

                                <div class="prd-grid">
                                    <?php
                                    // medical
                                    $query = "SELECT * FROM medical";
                                    $data  = mysqli_query($db, $query) or die('error');

                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $id     = $row['m_id'];
                                            $mName  = $row['prdName'];
                                            $img    = $row['img'];
                                            $type = $row['type'];
                                    ?>
                                            <div class="prd">
                                                <div class="prd-img">
                                                    <a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>"><?php echo '<img src="./admin/upload/medical/' . $img . '" alt="">' ?></a>
                                                </div>
                                                <div class="prd-info">
                                                    <h3><a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>"><?php echo $mName ?></a></h3>
                                                    <a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>" class="btn"><i class="icon-market"></i>Get a Quote</a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }

                                    ?>
                                </div>

                            <?php
                            } else {

                            ?>

                                <div class="filters-row">
                                    <div class="filters-row-left"><span>Kindergarten Furniture Solutions</span>
                                        <div class="form-inline">
                                        </div>
                                    </div>
                                </div>

                                <div class="prd-grid">
                                    <?php
                                    // medical
                                    $query = "SELECT * FROM kindergarten";
                                    $data  = mysqli_query($db, $query) or die('error');

                                    if (mysqli_num_rows($data) > 0) {
                                        while ($row = mysqli_fetch_assoc($data)) {
                                            $id     = $row['k_id'];
                                            $kName  = $row['k_name'];
                                            $kModel  = $row['k_model'];
                                            $kSize  = $row['k_size'];
                                            $img    = $row['img'];
                                            $type = $row['type'];
                                    ?>
                                            <div class="prd">
                                                <div class="prd-img">
                                                    <a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>"><?php echo '<img src="./admin/upload/kindergarten/' . $img . '" alt="">' ?></a>
                                                </div>
                                                <div class="prd-info">
                                                    <h3><a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>"><?php echo $kName ?></a></h3>
                                                    <a href="product-item.php?view=<?php echo $id ?>&type=<?php echo $type?>" class="btn"><i class="icon-market"></i>Get a Quote</a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }

                                    ?>
                                </div>

                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('./inc/footer.php');
    ?>
    <!-- External JavaScripts -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="js/vendor/lightbox.min.js"></script>
    <script src="js/vendor/jquery.scroll-with-ease.min.js"></script>
    <script src="js/vendor/jquery.form.js"></script>
    <script src="js/vendor/jquery.validate.min.js"></script>
    <script src="js/vendor/moment.js"></script>
    <script src="js/vendor/bootstrap-datetimepicker.min.js"></script>
    <script src="js/vendor/jquery.waypoints.min.js"></script>
    <script src="js/vendor/jquery.countTo.js"></script>
    <script src="js/vendor/jquery.print.js"></script>
    <script src="js/vendor/jquery.dotdotdot.min.js"></script>
    <script src="js/vendor/jquery.doubletaptogo.min.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- Custom JavaScripts -->
    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
</body>

</html>