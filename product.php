<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="html 5 template, cleaning service template, cleaning template, cleaning company template">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="favamecro.ico">
    <title>ProClena - HTML Website Template - Our Shop</title>
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
                        <div class="column-filters-inside">
                            <div class="side-block">
                                <h3>Categories</h3>
                                <ul class="category-list">
                                    <li><a href="#">environmental Solution</a></li>
                                    <li><a href="#">Medical Furniture</a></li>
                                    <li><a href="#">Kindergarden Furniture</a></li>
                                </ul>
                            </div>
                            <!-- <div class="side-block">
                                <h3>Price</h3>
                                <div class="range">
                                    <div id="rangeSlider1"></div>
                                    <p>Price: $<span id="number-1-2"></span> - $<span id="number-1-1"></span></p>
                                </div>
                            </div> -->
                            <div class="side-block">
                                <h3>Popular Products</h3>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="product.html"><img src="images/outdoor-bin.png"
                                                class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="product.html">Outdoor Bin</a></h3>
                                        <div class="price">$2.99</div>
                                    </div>
                                </div>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="product.html"><img src="images/medical-table.png"
                                                class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="product.html">Medical Table</a></h3>
                                        <div class="price">$2.11</div>
                                    </div>
                                </div> 
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="product.html"><img src="images/kids-chair.png"
                                                class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="product.html">Kids Chair</a></h3>
                                        <div class="price">$9.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="filters-row">
                            <div class="filters-row-left"><span>Environmental Solution</span>
                                <div class="form-inline">
                                    <!-- <div class="select-wrapper select-wrapper--sm">
                                        <select name="service" class="input-custom input-custom--sm">
                                            <option value="">Default Sorting</option>
                                            <option value="">Sort By Price</option>
                                            <option value="">Sort By Name</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="filters-row-right">
                                <div class="simple-pagination">
                                    <span>Pages:</span>
                                    <a class="active" href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">&raquo;</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="prd-grid">
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-1.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Outdoor Bin</a></h3>
                                    <div class="price">$2.99</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-2.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Indoor Bin</a>
                                    </h3>
                                    <div class="price">$33.79</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-3.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Medical Bin</a></h3>
                                    <div class="price">$2.99</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-4.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Sorting Bin</a></h3>
                                    <!-- <div class="rating rating-4"><i class="icon-star-black"></i><i
                                            class="icon-star-black"></i><i class="icon-star-black"></i><i
                                            class="icon-star-black"></i><i class="icon-star-black"></i></div> -->
                                    <div class="price">$2.99</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Get a Quote</a>
                                </div>
                            </div>
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
                            <!-- <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-6.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Pledge Multi Surface Antibacterial Everyday Cleaner</a>
                                    </h3>
                                    <div class="rating rating-5"><i class="icon-star-black"></i><i
                                            class="icon-star-black"></i><i class="icon-star-black"></i><i
                                            class="icon-star-black"></i><i class="icon-star-black"></i></div>
                                    <div class="price">$2.11</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Add To Cart</a>
                                </div>
                            </div> -->
                            <!-- <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-7.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Wet Ones Antibacterial Hand Wipes Citrus Scent Travel
                                            Pack</a></h3>
                                    <div class="price">$1.99</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Add To Cart</a>
                                </div>
                            </div> -->
                            <!-- <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-8.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Windex Original Glass Cleaner 26 Ounces</a></h3>
                                    <div class="price">$3.12</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Add To Cart</a>
                                </div>
                            </div> -->
                            <!-- <div class="prd">
                                <div class="prd-img">
                                    <a href="product.html"><img src="images/product/prd-9.jpg" class="img-responsive"
                                            alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="product.html">Handmaster Medium Utility Stretch Knit Gloves (93TM)</a>
                                    </h3>
                                    <div class="price">$9.99</div>
                                    <a href="#" class="btn"><i class="icon-market"></i>Add To Cart</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="clearfix"></div>
                        <!-- <div class="text-center">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                            </ul>
                        </div> -->
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