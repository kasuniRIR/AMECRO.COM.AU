<?php
    include('./database/connection.php')
?>
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
    <title>AMECRO - Home Page</title>
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,800"
        rel="stylesheet">
</head>

<body class="page-index">
    <!--
<div class="loading-content">
	<div class="loaded-text" data-text="ProClena">
		ProClena
	</div>
</div>
-->
    <?php
    include('./inc/header.php');
    ?>
    <main class="page-main">
        <!-- Slider -->
        <div class="block">
            <div id="mainSliderWrapper">
                <div class="loading-content">
                    <div class="loading-dots dark-gray">
                        <i></i>
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>
                </div>
                <div id="mainSlider">
                    <div class="slide mask">
                        <div class="img--holder" style="background-image: url(images/slider/Slider1.png);"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <h2 data-animation="zoomIn" data-animation-delay="1s">So Fresh & So Clean...
                                        </h2>
                                        <h3 data-animation="zoomIn" data-animation-delay="2s">We Promise!</h3>
                                        <a href="contact.php" class="btn" data-animation="fadeInUp"
                                            data-animation-delay="2s">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide mask">
                        <div class="img--holder" style="background-image: url(images/slider/Slider2.png);"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <h2 data-animation="zoomIn" data-animation-delay="1s">So Fresh & So Clean...
                                        </h2>
                                        <h3 data-animation="zoomIn" data-animation-delay="2s">We Promise!</h3>
                                        <a href="contact.php" class="btn" data-animation="fadeInUp"
                                            data-animation-delay="2s">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide mask">
                        <div class="img--holder" style="background-image: url(images/slider/Slider3.png);"></div>
                        <div class="slide-content center">
                            <div class="vert-wrap container">
                                <div class="vert">
                                    <div class="container">
                                        <h2 data-animation="zoomIn" data-animation-delay="1s">So Fresh & So Clean...
                                        </h2>
                                        <h3 data-animation="zoomIn" data-animation-delay="2s">We Promise!</h3>
                                        <a href="contact.php" class="btn" data-animation="fadeInUp"
                                            data-animation-delay="2s">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider -->
        <!-- Product Range  -->
        <div class="block">
            <div class="container">
                <h2 class="text-center h-lg h-decor">Product Range</h2>
                <div class="text-center max-700">
                </div>
                <div class="news-carousel row">
                    <!-- medical -->
                    <?php
                        $query = "SELECT * FROM medical limit 2";
                        $data  = mysqli_query($db, $query) or die('error');

                        if(mysqli_num_rows($data) > 0){
                            while ($row = mysqli_fetch_assoc($data)) {
                                $id     = $row['m_id'];
                                $pName  = $row['prdName'];
                                $img    = $row['img'];
                                $type = $row['type'];
                    ?>

                    <div class="col-sm-4">
                        <div class="news-prw">
                            <div class="news-prw-image">
                                <a href="product.php?page=medical">
                                    <?php echo '<img src="./admin/upload/medical/' .$img. '" alt="">' ?>
                                    <span><i class="icon-link"></i></span>
                                </a>
                            </div>
                            <h3 class="news-prw-title"><?php echo $pName ?></h3>
                            <a href="product.php?page=medical" class="btn btn-border">View</a>
                        </div>
                    </div>

                    <?php
                        }
                    } ?>

                    <!-- environmental -->
                    <?php
                        $query = "SELECT * FROM environmental limit 2";
                        $data  = mysqli_query($db, $query) or die('error');

                        if(mysqli_num_rows($data) > 0){
                            while ($row = mysqli_fetch_assoc($data)) {
                                $id     = $row['e_id'];
                                $eName  = $row['e_name'];
                                $eModel  = $row['e_model'];
                                $eSize  = $row['e_size'];
                                $img    = $row['img'];
                                $type = $row['type'];
                    ?>

                    <div class="col-sm-4">
                        <div class="news-prw">
                            <div class="news-prw-image">
                                <a href="product.php?page=environmental">
                                    <?php echo '<img src="./admin/upload/environmental/' .$img. '" alt="">' ?>
                                    <span><i class="icon-link"></i></span>
                                </a>
                            </div>
                            <h3 class="news-prw-title"><?php echo $eName ?></h3>
                            <a href="product.php?page=environmental" class="btn btn-border">View</a>
                        </div>
                    </div>

                    <?php
                        }
                    } ?>

                    <!-- medical -->
                    <?php
                        $query = "SELECT * FROM kindergarten limit 2";
                        $data  = mysqli_query($db, $query) or die('error');

                        if(mysqli_num_rows($data) > 0){
                            while ($row = mysqli_fetch_assoc($data)) {
                                $id     = $row['k_id'];
                                $kName  = $row['k_name'];
                                $kModel  = $row['k_model'];
                                $kSize  = $row['k_size'];
                                $img    = $row['img'];
                                $type = $row['type'];
                    ?>

                    <div class="col-sm-4">
                        <div class="news-prw">
                            <div class="news-prw-image">
                                <a href="product.php?page=kindergarten">
                                    <?php echo '<img src="./admin/upload/kindergarten/' .$img. '" alt="">' ?>
                                    <span><i class="icon-link"></i></span>
                                </a>
                            </div>
                            <h3 class="news-prw-title"><?php echo $kName ?></h3>
                            <a href="product.php?page=kindergarten" class="btn btn-border">View</a>
                        </div>
                    </div>

                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>
        <!-- End Product Range  -->

        <!-- About Us block -->
        <div class="block fullwidth-bg bg-cover inset-lg-3 pb-xs-0 block-1" data-bg="images/block-bg-1.jpg">
            <div class="container">
                <div class="row zindex-1">
                    <div class="col-sm-7 col-lg-9">
                        <h2 class="h-lg">About Our Company</h2>
                        <!-- <ul class="nav nav-tabs nav-tabs--sm">
                            <li class="active"><a data-toggle="tab" href="#about1">Some Words</a></li>
                            <li><a data-toggle="tab" href="#about2">How it Works</a></li>
                            <li><a data-toggle="tab" href="#about3">With Us</a></li>
                        </ul> -->
                        <div class="tab-content tab-content-nopad">
                            <div id="about1" class="tab-pane fade in active">
                                <p>We are a team of a well-experienced international trading team with over 30 years of
                                    experience in providing tailored solutions for clients' requirements. We source
                                    products from simple office solutions to complicated engineering solutions through
                                    our network of the world's leading manufacturers from the USA, UK, EU, India, and
                                    China catering to a wide range of clients in varied sectors.</p><br />
                                <p>We offer the best deals for our clients in terms of pricing, payment terms, product
                                    quality, reliability, and shipping costs. Any type of assistance needed for
                                    installation, warranty, etc will be handled by us with ease for the clients. </p>
                                <div class="divider-sm"></div>
                                <h4>Our global clients span from</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="marker-list">
                                            <li>Australia</li>
                                            <li>Middle East</li>
                                            <li>Africa to South Asia</li>
                                        </ul>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <ul class="marker-list">
                                            <li>Keep the same cleaner for every visit</li>
                                            <li>All cleaning materials and equipment</li>
                                            <li>100% satisfaction guarantee</li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <div id="about2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>How Cleaning Company Works</h4>
                                        <p>When the weekend finally arrives, you’d much rather put your feet up while a
                                            cleaning service does the work, rather than spend your precious downtime on
                                            your hands and knees scrubbing.</p>
                                        <p class="visible-lg">Taking the stress out of any aspect of cleaning is what we
                                            specialise in. We will come to your premises and offer a free quote, so you
                                            know exactly what you’ll be spending</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6>Book online in<span class="color"> 60 seconds</span></h6>
                                        <p>Book & pay online. We'll match you with a trusted, experienced house cleaner
                                        </p>
                                        <h6>Get a <span class="color">5 star cleaner</span></h6>
                                        <p>Every cleaner is friendly and reliable. They've been background-checked &
                                            rated 5-stars</p>
                                        <h6>Manage everything <span class="color">online</span></h6>
                                        <p>Add visits, skip visits, leave notes, and book extra services laundry and
                                            oven cleaning</p>
                                    </div>
                                </div>
                            </div>
                            <div id="about3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="num-box">
                                            <div class="num-box-num">1.</div>
                                            <h4 class="num-box-title">We Treat Your Homes Like Ours</h4>
                                            <p>At The Cleaning Company, we are fully bonded and insured, meaning you can
                                                have peace of mind when we enter your home.</p>
                                        </div>
                                        <div class="num-box">
                                            <div class="num-box-num">3.</div>
                                            <h4 class="num-box-title">Immediate Online Quotes</h4>
                                            <p>Upcoming party? Expecting guests? We’ll give an immediate price quote so
                                                you can enjoy your time rather than worry about the mess.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="num-box">
                                            <div class="num-box-num">2.</div>
                                            <h4 class="num-box-title">Satisfaction Guaranteed</h4>
                                            <p>Our cleaning crew are professionally trained, and if you’re ever unhappy
                                                with any area we’ve cleaned, we’ll and reclean it next day.</p>
                                        </div>
                                        <div class="num-box">
                                            <div class="num-box-num">4.</div>
                                            <h4 class="num-box-title">We Are Experts</h4>
                                            <p>We are dominate the industry in scale and scope with an adaptable,
                                                extensive network that consistently delivers exceptional results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-right-wrap">
                    <img src="images/content/single-person.png" alt="">
                </div>
            </div>
        </div>
        <!-- /About Us block -->
        <!-- Text Block -->
        <div class="block">
            <div class="container">
                <div class="row row-revert-xs">
                    <div class="col-sm-5 col-md-5 col-lg-6">
                        <img src="./images/Why-Us.png" class="img-responsive visible-lg visible-md hidden-sm visible-xs"
                            alt="">
                        <img src="./images/Why-Us.png" class="img-responsive hidden-lg hidden-md hidden-xs visible-sm"
                            alt="">
                    </div>
                    <div class="divider-xl visible-xs"></div>
                    <div class="col-sm-7 col-md-7 col-lg-6">
                        <h2>Why choose us</h2>
                        <p class="p-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta cupiditate
                            incidunt eius sunt, perspiciatis accusantium molestias ea eum quas. Vero minus magni laborum
                            vitae dicta, ad consequuntur omnis qui numquam!
                        </p>
                        <div class="marker-box">
                            <div class="marker-box-marker"><i class="icon-leaf"></i></div>
                            <h4 class="marker-box-title">Top-Rated Company</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta cupiditate incidunt eius
                                sunt, </p>
                        </div>
                        <div class="marker-box">
                            <div class="marker-box-marker"><i class="icon-leaf"></i></div>
                            <h4 class="marker-box-title">Superior Quality</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta cupiditate incidunt eius
                                sunt, </p>
                        </div>
                        <div class="marker-box hidden-md">
                            <div class="marker-box-marker"><i class="icon-leaf"></i></div>
                            <h4 class="marker-box-title">Eco-Friendly Products</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta cupiditate incidunt eius
                                sunt, </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Text Block -->
        <!-- Testimonials Single Block -->
        <div class="block fullwidth-bg bg-cover block-testimonials-bg inset-lg-1" data-bg="images/block-bg-3.jpg">
            <div class="container">
                <h2 class="text-center h-lg">Happy Customers,<br class="clearfix visible-xs"></h2>
                <div class="testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inside">
                            <p><i>We appreciate the support that AMECRO has given us to source some of the critical
                                    items for our operations at great prices.</i></p>
                        </div>
                        <div class="testimonial-item-author">
                            <img src="./images/person-feedback.png" alt="">
                            <div><span class="testimonial-item-name">Nathan Donnarumma.</span> <span
                                    class="testimonial-item-position">- Operations Manager - Servicing SA, Adelaide.
                                </span></div>
                        </div>
                    </div>
                    <!-- <div class="testimonial-item">
                        <div class="testimonial-item-inside">
                            <p><i>They are very professional and do a great job cleaning the house!! I locked myself out
                                    of my house the other day and they were the only ones with a key. They were kind
                                    enough to drive over to unlock the door. That speaks volumes!!! They really care
                                    about their clients.</i></p>
                        </div>
                        <div class="testimonial-item-author">
                            <img src="images/content/testimonial-author-2.png" alt="">
                            <div><span class="testimonial-item-name">Shirley R. Sanchez.</span> <span class="testimonial-item-position">Evanston, Illinois</span></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!--/ Testimonials Single Block -->
        <!-- News block -->
        <div class="block">
            <div class="container">
                <h2 class="text-center h-lg h-decor">Solutions</h2>
                <div class="text-center max-700">
                    <!-- <p class="p-lg">We write about industry developments, training, health and safety, eco-friendly
                        cleaning products, recycling practices and advice for working with professional cleaners.</p> -->
                </div>
                <div class="news-carousel row">
                    <div class="col-sm-4">
                        <div class="news-prw">
                            <div class="news-prw-image">
                                 <a href="product.php?page=environment">
                                    <img src="images/content/env.png" alt="">
                                    <span><i class="icon-link"></i></span>
                                </a>
                            </div>
                            <h3 class="news-prw-title">Environmental Solutions</h3>
                        </div>
                    </div>


                    


                    <div class="col-sm-4">
                        <div class="news-prw">
                            <div class="news-prw-image">
                                 <a href="product.php?page=medical">
                                    <img src="images/content/medical.png" alt="">
                                    <span><i class="icon-link"></i></span>
                                </a>
                            </div>
                            <!-- <div class="news-prw-date">22 December, 2018</div> -->
                            <h3 class="news-prw-title">Medical Furniture</h3>
                            <!-- <p>Over time, all carpets endure stains, spills and discolouration. That’s why they require
                                regular cleaning.</p>
                            <a href="blog-post-page.html" class="btn btn-border">Read more</a> -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="news-prw">
                            <div class="news-prw-image">
                                 <a href="product.php?page=kidergarten">
                                    <img src="images/content/Kindergarten - A.png" alt="">
                                    <span><i class="icon-link"></i></span>
                                </a>
                            </div>
                            <h3 class="news-prw-title">Kindergarten Furniture</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /News block -->
        <!-- Text Block -->
        <div class="block fullwidth-bg">
            <div class="container">
                <div class="row service-house-row">
                    <div class="col-lg-5 inset-pad">
                        <h2><span>Special Orders<br class="clearfix visible-xs"></span></h2>
                        <!-- <h5>Ready for a cleaner facility</h5> -->
                        <div class="divider-sm"></div>
                        <p>If you do not find the products that you're looking for on our website, please send us a
                            message with what you are looking for and we could source it for you through our extensive
                            network of trading partners and manufacturers.</p>
                        <div class="divider-sm"></div>
                        <a href="contact.php" class="btn btn-lg animation" data-animation="tada">Request</a>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-6" style="margin-top: -100px">
                        <img src="./images/girl-specialOrder.png"
                            class="img-responsive visible-lg visible-md hidden-sm visible-xs" alt="">
                        <img src="./images/girl-specialOrder.png"
                            class="img-responsive hidden-lg hidden-md hidden-xs visible-sm" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="block fullwidth-bg inset-lg-1 bg-cover js-bg-parallax" data-bg="images/Stats.png">
            <div class="container">
                <center>
                    <div class="row counter-row">
                        <div class="col-xs-6 col-sm-4">
                            <div class="counter-item">
                                <div class="counter-item-icon"><i class="icon-user-rating"></i></div>
                                <span class="counter-item-number number"><span class="count" data-to="1500"
                                        data-speed="1000">1500</span>+</span>
                                <div class="counter-item-text">Happy Customers</div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <div class="counter-item">
                                <div class="counter-item-icon"><i class="icon-award"></i></div>
                                <span class="counter-item-number number"><span class="count" data-to="100"
                                        data-speed="1000">100</span>%</span>
                                <div class="counter-item-text">Service Guarantee</div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <div class="counter-item">
                                <div class="counter-item-icon"><i class="icon-648324users"></i></div>
                                <span class="counter-item-number number"><span class="count" data-to="30"
                                        data-speed="1000">30</span>+</span>
                                <div class="counter-item-text">Trusted Brands</div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <!--/Text Block -->
        <!-- Text Block -->
        <div class="block m-bottom-45">
            <div class="container">
                <div class="row row-revert-xs">
                    <div class="col-sm-6">
                        <div class="img-left-wrap1"><img src="images/EnvironmentalSolution.png" class="img-responsive"
                                alt=""></div>
                    </div>
                    <div class="col-sm-6">
                        <h2>Environmental Solutions</h2>
                        <p>We offer a wide range of environmental solutions from top manufacturers meeting ISO 9001 /
                            14000, OSHAS 18001, CE, EN840 standards. We could accommodate customized designs for large
                            orders under your own label.</p>
                        <!-- <div class="marker-box">
                            <div class="marker-box-marker"><i class="icon-leaf"></i></div>
                            <h4 class="marker-box-title">100% Safe & Organic</h4>
                            <p>We combine high concentrates of pure organic essential oils with quality plant-derived
                                ingredients.</p>
                        </div> -->
                        <!-- <div class="marker-box">
                            <div class="marker-box-marker"><i class="icon-leaf"></i></div>
                            <h4 class="marker-box-title">We Care About The Earth</h4>
                            <p>All of our packaging, bottles, cleaning equipment, even our uniforms come from recycled,
                                fairtrade or low impact origins.</p>
                        </div><br /> -->
                        <div class="divider-sm"></div>
                        <a href="product.php?page=environment" class="btn btn-lg animation" data-animation="tada">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/Text Block -->

        <!-- Text Block -->
        <div class="block fullwidth-bg bg-cover inset-lg-3 pb-xs-0 block-1" data-bg="images/Medical_Solutions.png">
            <div class="container">
                <div class="row service-house-row">
                    <div class="col-lg-7 inset-pad">
                        <h2><span>Medical Furniture Solutions<br class="clearfix visible-xs"></span></h2>
                        <!-- <h5>Ready for a cleaner facility</h5> -->
                        <div class="divider-sm"></div>
                        <!-- <p>When it comes to gauging a complete and effective cleaning and sanitation solution, from a
                            cost perspective, it is important to ensure the accuracy of all costs involved.</p>
                        <p>This cost calculator is provided to clients to assist you in establishing the estimated
                            cleaning cost for your company:</p> -->
                        <p>We offer a range of Medical furniture built and tested under CE standards. Tabletop made with
                            Formaldehyde-free plywood, environment-friendly without detriment to the health of eye care
                            practitioners. Plastic covers are added with inflammable and anti-UV materials, fire-proof
                            and corrosion-free. All powered tables come with Medical-grade plugs. When designing these
                            furniture electrical safety is given high priority to protect the doctors and patients.</p>
                        <div class="divider-sm"></div>
                        <a href="product.php?page=medical" class="btn btn-lg animation" data-animation="tada">Learn More</a>
                    </div>
                    <!-- <div class="col-lg-7">
                        <div class="service-house-wrap">
                            <div class="service-house">
                                <a href="service-page-9.html" class="service-house-item">
                                    <img src="images/content/index-service-house-1.jpg" alt="">
                                    <span class="service-house-item-title">Residential Cleaning</span> 
                                </a>
                                <a href="service-page-7.html" class="service-house-item">
                                    <img src="images/content/index-service-house-2.jpg" alt="">
                                    <span class="service-house-item-title">Window Cleaning</span>
                                </a>
                                <a href="service-page-3.html" class="service-house-item">
                                    <img src="images/content/index-service-house-3.jpg" alt="">
                                    <span class="service-house-item-title">Move In / Move Out Cleaning</span>
                                </a>
                                <a href="service-page-1.html" class="service-house-item">
                                    <img src="images/content/index-service-house-4.jpg" alt="">
                                    <span class="service-house-item-title">Apartment Cleaning</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Text Block -->
        <div class="block m-bottom-45">
            <div class="container">
                <div class="row row-revert-xs">
                    <div class="col-sm-6">
                        <div class="img-left-wrap1"><img src="images/content/Kindergarten_Solution.png" class="img-responsive"
                                alt=""></div>
                    </div>
                    <div class="col-sm-6">
                        <h2>Kindergarten Furniture Solutions</h2>
                        <!-- <p class="p-lg">We feel good about cleaning with our self-formulated, natural products that are
                            better for the environment</p> -->
                        <!-- <div class="marker-box">
                            <div class="marker-box-marker"><i class="icon-leaf"></i></div>
                            <h4 class="marker-box-title">100% Safe & Organic</h4>
                            <p>We combine high concentrates of pure organic essential oils with quality plant-derived
                                ingredients.</p>
                        </div> -->
                        <p>The kid's range of plastic furniture is made to ISO 9001 / 14000 and CE standards keeping
                            children's safety in mind.</p>
                        <div class="marker-box">
                            <!-- <div class="marker-box-marker"><i class="icon-leaf"></i></div>
                            <h4 class="marker-box-title">We Care About The Earth</h4>
                            <p>All of our packaging, bottles, cleaning equipment, even our uniforms come from recycled,
                                fairtrade or low impact origins.</p> -->

                            <div class="divider-sm"></div>
                            <a href="product.php?page=kidergarten" class="btn btn-lg animation" data-animation="tada">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br /><br /><br /><br />
        <!--/Text Block -->

        <!-- Brands Carousel -->
        <div class="block">
            <div class="container">
                <h2 class="text-center h-lg h-decor">Brands</h2>
                <div class="brand-carousel">
                    <a href="#"><img src="images/content/brand-img-1.png" alt=""></a>
                    <a href="#"><img src="images/content/brand-img-2.png" alt=""></a>
                    <a href="#"><img src="images/content/brand-img-3.png" alt=""></a>
                    <a href="#"><img src="images/content/brand-img-4.png" alt=""></a>
                    <a href="#"><img src="images/content/brand-img-5.png" alt=""></a>
                    <a href="#"><img src="images/content/brand-img-6.png" alt=""></a>
                    <a href="#"><img src="images/content/brand-img-7.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- /Brands Carousel -->

    </main>
    <!-- Footer -->
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
    <script src="js/vendor/jarallax.min.js"></script>
    <!-- Custom JavaScripts -->
    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
</body>

</html>