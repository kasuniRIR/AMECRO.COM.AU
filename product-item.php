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
    <?php
    include('./inc/header.php');
    ?>
    <main class="page-main">
        <!-- Breadcrumbs Block -->
        <div class="block breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Product Page</li>
                </ul>
            </div>
        </div>
        <?php
        if (isset($_GET['view'], $_GET['type'])) {
            $id = $_GET['view'];
            $type = $_GET['type'];

            if ($type == 'medical') {
                $qry  = "SELECT * FROM medical WHERE m_id = $id";
                $data = mysqli_query($db, $qry) or die('error');
                if (mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        $id = $row['m_id'];
                        $prdName = $row['prdName'];
                        $prdFeature = $row['prdFeature'];
                        $img = $row['img'];
                        $tableTop = $row['tableTop'];
                        $elevationTable = $row['elevationTable'];
                        $elevationChair = $row['elevationChair'];
                        $maxLoad = $row['maxLoad'];
                        $elevationPhoropterarm = $row['elevationPhoropterarm'];
                        $phoropterRotation = $row['phoropterRotation'];
                        $tableRotation = $row['tableRotation'];
                        $chargingPort = $row['chargingPort'];
                        $topLamp = $row['topLamp'];
                        $fuse = $row['fuse'];
                        $voltage = $row['voltage'];
                        $inputPower = $row['inputPower'];
                        $tableWeight = $row['tableWeight'];
                        $chairWeight = $row['chairWeight'];
                        $type = $row['type'];
                    }
                }
        ?>

                <!-- //Breadcrumbs Block -->
                <div class="block bottom-sm">
                    <div class="container">
                        <h1 class="text-center h-decor">Our Shop</h1>
                        <div class="row product-block">
                            <div class="col-sm-6">
                                <div class="product-block-gallery">
                                    <div class="product-previews" id="productPreviews">

                                        <!-- <a href="#" class="product-previews-item" data-image="images/product/prd-big-1.jpg"
                                    data-zoom-image="images/product/prd-big-1.jpg">
                                    <img src="images/product/prd-thumb-1.jpg" />
                                </a>
                                <a href="#" class="product-previews-item" data-image="images/product/prd-big-2.jpg"
                                    data-zoom-image="images/product/prd-big-2.jpg">
                                    <img src="images/product/prd-thumb-2.jpg" />
                                </a>
                                <a href="#" class="product-previews-item" data-image="images/product/prd-big-3.jpg"
                                    data-zoom-image="images/product/prd-big-3.jpg">
                                    <img src="images/product/prd-thumb-3.jpg" />
                                </a> -->
                                    </div>
                                    <div class="product-block-mainimage">
                                        <!-- <img id="mainImage" src="images/product/prd-big-1.jpg" data-zoom-image="images/product/prd-big-1.jpg" /> -->
                                        <?php echo '<img src="./admin/upload/medical/' . $img . '" data-zoom-image="./admin/upload/medical/' . $img . '" id="mainImage" alt="">' ?>
                                    </div>
                                </div>
                            </div>
                            <div class="cleafix visible-xs"></div>
                            <div class="col-sm-6">
                                <div class="product-block-info">
                                    <h2 class="product-block-title"><?php echo $prdName ?></h2>
                                    <!-- <div class="rating"><span class="rating rating-4"><i class="icon-star-black"></i><i
                                        class="icon-star-black"></i><i class="icon-star-black"></i><i
                                        class="icon-star-black"></i><i class="icon-star-black"></i></span>
                                <a href="#" class="rating-text">2 customer reviews</a>
                            </div> -->
                                    <!-- <div class="product-block-price">$145,98</div>
                            <div class="product-block-price-comment">+ Free Shipping</div> -->
                                    <div class="product-block-description">
                                        <div class="row no-gutter">
                                            <div class="col-sm-6 hidden-xs">
                                                <ul class="marker-list-arrow">
                                                    <li>Table top size</li>
                                                    <li>Elevation range of table</li>
                                                    <li>Elevation range of chair</li>
                                                    <li>Max load </li>
                                                    <li>Elevation range of phoropter arm</li>
                                                    <li>Phoropter Rotation degree</li>
                                                    <li>Table rotation degree</li>
                                                    <li>Charging port</li>
                                                    <li>Top lamp</li>
                                                    <li>Fuse</li>
                                                    <li>Voltage</li>
                                                    <li>Max. Input power</li>
                                                    <li>Net weight of Chair</li>
                                                    <li>Net weight of whole table</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="no-marker">
                                                    <li><?php if(empty($tableTop)){ echo "N/A"; } else { echo $tableTop;} ?></li>
                                                    <li><?php if(empty($elevationTable)){ echo "N/A"; } else { echo $elevationTable;} ?></li>
                                                    <li><?php if(empty($elevationChair)){ echo "N/A"; } else { echo $elevationChair;} ?></li>
                                                    <li><?php if(empty($maxLoad)){ echo "N/A"; } else { echo $maxLoad;} ?></li>
                                                    <li><?php if(empty($elevationPhoropterarm)){ echo "N/A"; } else { echo $elevationPhoropterarm;} ?></li>
                                                    <li><?php if(empty($phoropterRotation)){ echo "N/A"; } else { echo $phoropterRotation;} ?></li>
                                                    <li><?php if(empty($tableRotation)){ echo "N/A"; } else { echo $tableRotation; } ?></li>
                                                    <li><?php if(empty($chargingPort)){ echo "N/A"; } else { echo $chargingPort;} ?></li>
                                                    <li><?php if(empty($topLamp)){ echo "N/A"; } else { echo $topLamp; } ?></li>
                                                    <li><?php if(empty($fuse)){ echo "N/A"; } else { echo $fuse;} ?></li>
                                                    <li><?php if(empty($voltage)){ echo "N/A"; } else { echo $voltage; } ?></li>
                                                    <li><?php if(empty($inputPower)){ echo "N/A"; } else { echo $inputPower; } ?></li>
                                                    <li><?php if(empty($chairWeight)){ echo "N/A"; } else { echo $chairWeight; } ?></li>
                                                    <li><?php if(empty($tableWeight)){ echo "N/A"; } else { echo $tableWeight; } ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-block-actions">
                                        <h3><span class="label label-warning">Authorized Suppliers</span></h3>
                                        <!-- <div class="qty-count">
                                    <span class="count-reduce">–</span>
                                    <input type="text" class="count-input" value="1">
                                    <span class="count-add">+</span>
                                </div>
                                <a href="#" class="btn btn-invert btn-lg product-block-add-to-cart "><i
                                        class="icon-market"></i>Add To Cart</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block bottom-sm">
                    <div class="container">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs--sm" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Description</a></li>
                            <!-- <li><a href="#tab2" role="tab" data-toggle="tab">Reviews (2)</a></li> -->
                        </ul>
                        <!-- Tab panels -->
                        <div class="tab-content tab-content-nopad">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <p><?php echo nl2br($prdFeature,false) ?></p>
                                <!-- <div id="faq1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Simply visit the signup flow to book a cleaning and as you provide information about your house and schedule, your quote will dynamically adjust.</p>
                                    </div>
                                </div>
                                <ul class="marker-list">
                                    <li>Kills 99.9% of Viruses & Bacteria when used as directed</li>
                                    <li>No harsh chemical residue</li>
                                    <li>Does not contain chlorine bleach</li>
                                    <li>No gloves, masks, or protective eye wear needed</li>
                                    <li>Available in two fresh scents: Citrus Sparkle Zest and Oxygen Splash</li>
                                    <li>Kills 99.9% of Viruses & Bacteria when used as directed,No harsh chemical residue,Does
                                        not contain chlorine bleach</li>
                                </ul> -->
                            </div>
                            <!-- <div role="tabpanel" class="tab-pane" id="tab2">
                                <h5><span class="rating"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>Joseph C. Lane</h5>
                                <p>Yesterday's crown preparation went great. I expected the same level of discomfort that I had
                                    experienced with another crown done by different dentist. Technique caused so much less
                                    difficulty that I went away with a smile on my face.</p>
                                <div class="divider"></div>
                                <h5><span class="rating"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>Jenny M. Fischer</h5>
                                <p>Fast and painless service, very happy with this establishment. I Highly Recommend them. I had
                                    my semiannual cleaning and checkup. And as always, it was an excellent experience.</p>
                            </div> -->
                        </div>
                    </div>
                </div>

            <?php
            } else if ($type == 'env') {
                $qry  = "select * from environmental where e_id = $id";
                $data = mysqli_query($db, $qry) or die('error');
                if (mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        $id = $row['e_id'];
                        $e_name = $row['e_name'];
                        $e_model = $row['e_model'];
                        $img = $row['img'];
                        $e_size = $row['e_size'];
                        $type = $row['type'];
                    }
                }
            ?>

                <!-- //Breadcrumbs Block -->
                <div class="block bottom-sm">
                    <div class="container">
                        <h1 class="text-center h-decor">Our Shop</h1>
                        <div class="row product-block">
                            <div class="col-sm-6">
                                <div class="product-block-gallery">
                                    <div class="product-previews" id="productPreviews">

                                        <!-- <a href="#" class="product-previews-item" data-image="images/product/prd-big-1.jpg"
                                    data-zoom-image="images/product/prd-big-1.jpg">
                                    <img src="images/product/prd-thumb-1.jpg" />
                                </a>
                                <a href="#" class="product-previews-item" data-image="images/product/prd-big-2.jpg"
                                    data-zoom-image="images/product/prd-big-2.jpg">
                                    <img src="images/product/prd-thumb-2.jpg" />
                                </a>
                                <a href="#" class="product-previews-item" data-image="images/product/prd-big-3.jpg"
                                    data-zoom-image="images/product/prd-big-3.jpg">
                                    <img src="images/product/prd-thumb-3.jpg" />
                                </a> -->
                                    </div>
                                    <div class="product-block-mainimage">
                                    <?php echo '<img src="./admin/upload/environmental/' . $img . '" data-zoom-image="./admin/upload/environmental/' . $img . '" id="mainImage" alt="">' ?>
                                    </div>
                                </div>
                            </div>
                            <div class="cleafix visible-xs"></div>
                            <div class="col-sm-6">
                                <div class="product-block-info">
                                    <h2 class="product-block-title"><?php echo $e_name ?></h2>
                                    <!-- <div class="rating"><span class="rating rating-4"><i class="icon-star-black"></i><i
                                        class="icon-star-black"></i><i class="icon-star-black"></i><i
                                        class="icon-star-black"></i><i class="icon-star-black"></i></span>
                                <a href="#" class="rating-text">2 customer reviews</a>
                            </div> -->
                                    <!-- <div class="product-block-price">$145,98</div>
                            <div class="product-block-price-comment">+ Free Shipping</div> -->
                                    <div class="product-block-description">
                                        <div class="row no-gutter">
                                            <div class="col-sm-6 hidden-xs">
                                                <ul class="marker-list-arrow">
                                                    <li>Model</li>
                                                    <li>Size</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="no-marker">
                                                    <li><?php if(empty($e_model)){ echo "N/A"; } else { echo $e_model;} ?></li>
                                                    <li><?php if(empty($e_size)){ echo "N/A"; } else { echo $e_size;} ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-block-actions">
                                        <h3><span class="label label-warning">Authorized Suppliers</span></h3>
                                        <!-- <div class="qty-count">
                                    <span class="count-reduce">–</span>
                                    <input type="text" class="count-input" value="1">
                                    <span class="count-add">+</span>
                                </div>
                                <a href="#" class="btn btn-invert btn-lg product-block-add-to-cart "><i
                                        class="icon-market"></i>Add To Cart</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="block bottom-sm">
                    <div class="container"> -->
                        <!-- Nav tabs -->
                        <!-- <ul class="nav nav-tabs nav-tabs--sm" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Description</a></li> -->
                            <!-- <li><a href="#tab2" role="tab" data-toggle="tab">Reviews (2)</a></li> -->
                        <!-- </ul> -->
                        <!-- Tab panels -->
                        <!-- <div class="tab-content tab-content-nopad">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <p></p>
                                <p><b>Specification</b></p> -->
                                <!-- <ul class="marker-list">
                                    <li>Kills 99.9% of Viruses & Bacteria when used as directed</li>
                                    <li>No harsh chemical residue</li>
                                    <li>Does not contain chlorine bleach</li>
                                    <li>No gloves, masks, or protective eye wear needed</li>
                                    <li>Available in two fresh scents: Citrus Sparkle Zest and Oxygen Splash</li>
                                    <li>Kills 99.9% of Viruses & Bacteria when used as directed,No harsh chemical residue,Does
                                        not contain chlorine bleach</li>
                                </ul> -->
                            <!-- </div> -->
                            <!-- <div role="tabpanel" class="tab-pane" id="tab2">
                                <h5><span class="rating"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>Joseph C. Lane</h5>
                                <p>Yesterday's crown preparation went great. I expected the same level of discomfort that I had
                                    experienced with another crown done by different dentist. Technique caused so much less
                                    difficulty that I went away with a smile on my face.</p>
                                <div class="divider"></div>
                                <h5><span class="rating"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>Jenny M. Fischer</h5>
                                <p>Fast and painless service, very happy with this establishment. I Highly Recommend them. I had
                                    my semiannual cleaning and checkup. And as always, it was an excellent experience.</p>
                            </div> -->
                        <!-- </div> -->
                    <!-- </div>
                </div> -->

            <?php
            } else {
                $qry  = "select * from kindergarten where k_id = $id";
                $data = mysqli_query($db, $qry) or die('error');
                if (mysqli_num_rows($data) > 0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        $id = $row['k_id'];
                        $k_name = $row['k_name'];
                        $k_model = $row['k_model'];
                        $img = $row['img'];
                        $k_size = $row['k_size'];
                        $type = $row['type'];
                    }
                }
            ?>

                <!-- //Breadcrumbs Block -->
                <div class="block bottom-sm">
                    <div class="container">
                        <h1 class="text-center h-decor">Our Shop</h1>
                        <div class="row product-block">
                            <div class="col-sm-6">
                                <div class="product-block-gallery">
                                    <div class="product-previews" id="productPreviews">

                                        <!-- <a href="#" class="product-previews-item" data-image="images/product/prd-big-1.jpg"
                                    data-zoom-image="images/product/prd-big-1.jpg">
                                    <img src="images/product/prd-thumb-1.jpg" />
                                </a>
                                <a href="#" class="product-previews-item" data-image="images/product/prd-big-2.jpg"
                                    data-zoom-image="images/product/prd-big-2.jpg">
                                    <img src="images/product/prd-thumb-2.jpg" />
                                </a>
                                <a href="#" class="product-previews-item" data-image="images/product/prd-big-3.jpg"
                                    data-zoom-image="images/product/prd-big-3.jpg">
                                    <img src="images/product/prd-thumb-3.jpg" />
                                </a> -->
                                    </div>
                                    <div class="product-block-mainimage">
                                    <?php echo '<img src="./admin/upload/kindergarten/' . $img . '" data-zoom-image="./admin/upload/kindergarten/' . $img . '" id="mainImage" alt="">' ?>
                                    </div>
                                </div>
                            </div>
                            <div class="cleafix visible-xs"></div>
                            <div class="col-sm-6">
                                <div class="product-block-info">
                                    <h2 class="product-block-title"><?php echo $k_name ?></h2>
                                    <!-- <div class="rating"><span class="rating rating-4"><i class="icon-star-black"></i><i
                                        class="icon-star-black"></i><i class="icon-star-black"></i><i
                                        class="icon-star-black"></i><i class="icon-star-black"></i></span>
                                <a href="#" class="rating-text">2 customer reviews</a>
                            </div> -->
                                    <!-- <div class="product-block-price">$145,98</div>
                            <div class="product-block-price-comment">+ Free Shipping</div> -->
                                    <div class="product-block-description">
                                        <div class="row no-gutter">
                                            <div class="col-sm-6 hidden-xs">
                                                <ul class="marker-list-arrow">
                                                    <li>Model</li>
                                                    <li>Size</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="no-marker">
                                                    <li><?php if(empty($k_model)){ echo "N/A"; } else { echo $k_model;} ?></li>
                                                    <li><?php if(empty($k_size)){ echo "N/A"; } else { echo $k_size;} ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-block-actions">
                                        <h3><span class="label label-warning">Authorized Suppliers</span></h3>
                                    </div>
                                        <!-- <div class="qty-count">
                                    <span class="count-reduce">–</span>
                                    <input type="text" class="count-input" value="1">
                                    <span class="count-add">+</span>
                                </div>
                                <a href="#" class="btn btn-invert btn-lg product-block-add-to-cart "><i
                                        class="icon-market"></i>Add To Cart</a> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="block bottom-sm">
                    <div class="container"> -->
                        <!-- Nav tabs -->
                        <!-- <ul class="nav nav-tabs nav-tabs--sm" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Description</a></li> -->
                            <!-- <li><a href="#tab2" role="tab" data-toggle="tab">Reviews (2)</a></li> -->
                        <!-- </ul> -->
                        <!-- Tab panels -->
                        <!-- <div class="tab-content tab-content-nopad">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <p>Lysol Power & Free is a new cleaning formula that uses Hydrogen Peroxide to release thousands
                                    of micro bubbles to penetrate to dissolve tough stains for a powerful clean without the
                                    harshness of bleach. Lysol Power and Free is a range of family friendly cleaners for a truly
                                    healthy home. The multi-purpose cleaner can be used throughout the home to clean household
                                    areas and kill 99.9% of viruses & bacteria.Powerful Cleaner the hydrogen peroxide formula
                                    releases thousands of micro bubbles that penetrate to dissolve grease and soap scum.Cuts
                                    through tough grease and soap scum.</p>
                                <p><b>Specification</b></p>
                                <ul class="marker-list">
                                    <li>Kills 99.9% of Viruses & Bacteria when used as directed</li>
                                    <li>No harsh chemical residue</li>
                                    <li>Does not contain chlorine bleach</li>
                                    <li>No gloves, masks, or protective eye wear needed</li>
                                    <li>Available in two fresh scents: Citrus Sparkle Zest and Oxygen Splash</li>
                                    <li>Kills 99.9% of Viruses & Bacteria when used as directed,No harsh chemical residue,Does
                                        not contain chlorine bleach</li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <h5><span class="rating"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>Joseph C. Lane</h5>
                                <p>Yesterday's crown preparation went great. I expected the same level of discomfort that I had
                                    experienced with another crown done by different dentist. Technique caused so much less
                                    difficulty that I went away with a smile on my face.</p>
                                <div class="divider"></div>
                                <h5><span class="rating"><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i><i class="icon-star-black"></i></span>Jenny M. Fischer</h5>
                                <p>Fast and painless service, very happy with this establishment. I Highly Recommend them. I had
                                    my semiannual cleaning and checkup. And as always, it was an excellent experience.</p>
                            </div>
                        </div> -->
                    <!-- </div>
                </div> -->

        <?php
            }
        }
        ?>

        <div class="block">
            <div class="container">
                <h2 class="h-lg h-decor text-center">Similar Products</h2>
                <div class="prd-grid prd-carousel">
                    <div class="prd">
                        <div class="prd-img">
                            <a href="product.html"><img src="images/product/prd-1.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="prd-info">
                            <h3><a href="product.html">Clorox Clean-Up All Purpose Cleaner with Bleach</a></h3>
                            <div class="price">$2.99</div>
                            <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                        </div>
                    </div>
                    <div class="prd">
                        <div class="prd-img">
                            <a href="product.html"><img src="images/product/prd-2.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="prd-info">
                            <h3><a href="product.html">O-Cedar Microfiber EasyWring Spin Mop & Bucket System</a></h3>
                            <div class="price">$33.79</div>
                            <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                        </div>
                    </div>
                    <div class="prd">
                        <div class="prd-img">
                            <a href="product.html"><img src="images/product/prd-3.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="prd-info">
                            <h3><a href="product.html">Scotch-Brite Non-Scratch Sponge</a></h3>
                            <div class="price">$2.99</div>
                            <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                        </div>
                    </div>
                    <!-- <div class="prd">
                        <div class="prd-img">
                            <a href="product.html"><img src="images/product/prd-4.jpg" class="img-responsive"
                                    alt=""></a>
                        </div>
                        <div class="prd-info">
                            <h3><a href="product.html">Ocelo Handy Sponge, 4.7 in. x 2.5 in. x 0.6 in.</a></h3>
                            <div class="rating rating-4"><i class="icon-star-black"></i><i
                                    class="icon-star-black"></i><i class="icon-star-black"></i><i
                                    class="icon-star-black"></i><i class="icon-star-black"></i></div>
                            <div class="price">$2.99</div>
                            <a href="#" class="btn"><i class="icon-market"></i>Add To Cart</a>
                        </div>
                    </div> -->
                    <!-- <div class="prd">
                        <div class="prd-img">
                            <a href="product.html"><img src="images/product/prd-5.jpg" class="img-responsive"
                                    alt=""></a>
                        </div>
                        <div class="prd-info">
                            <h3><a href="product.html">Fast Easy Broom with Dust Pan, 9.7 Ounces 2pk</a></h3>
                            <div class="rating rating-4"><i class="icon-star-black"></i><i
                                    class="icon-star-black"></i><i class="icon-star-black"></i><i
                                    class="icon-star-black"></i><i class="icon-star-black"></i></div>
                            <div class="price">$5.99</div>
                            <a href="#" class="btn"><i class="icon-market"></i>Add To Cart</a>
                        </div>
                    </div> -->
                    <div class="prd">
                        <div class="prd-img">
                            <a href="product.html"><img src="images/product/prd-6.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="prd-info">
                            <h3><a href="product.html">Pledge Multi Surface Antibacterial Everyday Cleaner</a></h3>
                            <!-- <div class="rating rating-5"><i class="icon-star-black"></i><i
                                    class="icon-star-black"></i><i class="icon-star-black"></i><i
                                    class="icon-star-black"></i><i class="icon-star-black"></i></div> -->
                            <div class="price">$2.11</div>
                            <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                        </div>
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