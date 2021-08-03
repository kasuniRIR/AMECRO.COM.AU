<?php
    $page = basename($_SERVER['PHP_SELF']);
?>
<!-- Header -->
<header class="page-header page-header--style2 header-sticky">
    <div class="page-header-mobile-info">
        <div class="page-header-mobile-info-content">
            <div class="page-header-info">
                <i class="icon icon-location"></i>No.39A, Elizabeth Street, Prospect SA5082
            </div>
            <div class="page-header-info">
                <i class="icon icon-clock1"></i>8:00 am - 5:00 pm
            </div>
            <div class="page-header-info">
                <i class="icon icon-phone"></i>Call: +61 466654500
            </div>
            <div class="page-header-info">
                <i class="icon icon-speech-bubble"></i><a
                    href="mailto:info@amecro.com.au">info@amecro.com.au</a>
            </div>
            <ul class="social-list">
                <li><a href="#"><i class="icon-facebook-logo1"></i></a></li>
                <li><a href="#"><i class="icon-twitter-logo1"></i></a></li>
                <li><a href="#"><i class="icon-instagram-logo1"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="page-header-topline">
        <div class="container">
            <div class="page-header-mobile-info-toggle"></div>
            <div class="page-header-topline-left">
                <div class="page-header-info">
                    <i class="icon icon-location"></i>No.39A, Elizabeth Street, Prospect SA5082
                </div>
                <div class="page-header-info">
                    <i class="icon icon-clock1"></i>8:00 am - 5:00 pm
                </div>
                <div class="page-header-info">
                    <i class="icon icon-phone"></i>Call: +61 466654500
                </div>
            </div>
            <div class="page-header-topline-right">
                <ul class="social-list">
                    <li><a href="#"><i class="icon-facebook-logo1"></i></a></li>
                    <li><a href="#"><i class="icon-twitter-logo1"></i></a></li>
                    <li><a href="#"><i class="icon-instagram-logo1"></i></a></li>
                </ul>
                <div class="quote-button-wrap">
                    <a href="contact.php" class="btn"><i class="icon icon-bell"></i>Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header-top">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
                <div class="shine"></div>
            </div>
            <div class="page-header-menu">
                <div class="container">
                    <ul class="menu">
                        <li class="<?php if($page == 'index.php'){ echo 'active';} ?>"><a href="index.php">HOME</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="index-rtl.html">HOME RTL MODE</a></li>
                            </ul> -->
                        </li>
                        <li class="<?php if($page == 'about.php'){ echo 'active';} ?>"><a href="about.php">About Us</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="blog-posts.html">About us</a></li>
                                <li><a href="gallery.html">Gallery Creative</a></li>
                                <li><a href="gallery-simple.html">Simple Gallery</a></li>
                            </ul> -->
                        </li>
                        <li class="<?php if($page == 'product.php'){ echo 'active';} ?>"><a href="product.php?page=environment">Products</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="service-page-1.html">Apartment Cleaning</a></li>
                                <li><a href="service-page-2.html">House Cleaning</a></li>
                                <li><a href="service-page-3.html">Move In / Move Out</a></li>
                                <li><a href="service-page-4.html">Сarpet Сleaning</a></li>
                                <li><a href="service-page-5.html">After Renovation</a></li>
                                <li><a href="service-page-6.html">Curtain Cleaning</a></li>
                                <li><a href="service-page-7.html">Window Cleaning</a></li>
                                <li><a href="service-page-8.html">Commercial Cleaning</a></li>
                                <li><a href="service-page-9.html">Residential Cleaning</a></li>
                            </ul> -->
                        </li>
                        <li class="<?php if($page == '#'){ echo 'active';} ?>"><a href="#">Solution</a></li>
                        <li class="<?php if($page == '#'){ echo 'active';} ?>"><a href="#">News</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="blog-posts.html">Blog Posts</a></li>
                                <li><a href="blog-posts-masonry.html">Blog Posts Masonry</a></li>
                                <li><a href="blog-post-page.html">Blog Post Page</a></li>
                            </ul> -->
                        </li>
                        <!-- <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="shop.html">Shop</a></li> -->
                        <li class="<?php if($page == 'contact.php'){ echo 'active';} ?>"><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="page-header-top-right">
                <!-- <div class="header-search">
                    <div class="header-search-toggle"><i class="icon-search"></i></div>
                    <div class="header-search-drop">
                        <form action="#" class="form-inline">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </div> -->
                <div class="header-cart">
                    <!-- <a href="#" class="icon icon-cart"></a> -->
                    <!-- <span class="badge">3</span> -->
                    <div class="header-cart-dropdown">
                        <div class="prd-sm">
                            <div class="prd-sm-img">
                                <a href="product.html"><img src="images/product/prd-sm-1.jpg" class="img-responsive"
                                        alt=""></a>
                            </div>
                            <div class="prd-sm-info">
                                <h3><a href="product.html">Scotch-Brite Non-Scratch Sponge</a></h3>
                                <div class="price">$2.99</div>
                            </div>
                            <div class="prd-sm-delete"><i class="icon-cancel2"></i></div>
                        </div>
                        <div class="prd-sm">
                            <div class="prd-sm-img">
                                <a href="product.html"><img src="images/product/prd-sm-2.jpg" class="img-responsive"
                                        alt=""></a>
                            </div>
                            <div class="prd-sm-info">
                                <h3><a href="product.html">Pledge Multi Surface Antibacterial Everyday Cleaner 9.7
                                        Ounces 2pk</a></h3>
                                <div class="price">$2.11</div>
                            </div>
                            <div class="prd-sm-delete"><i class="icon-cancel2"></i></div>
                        </div>
                        <div class="header-cart-total">
                            <div class="pull-left">Total:</div>
                            <div class="pull-right">$227.67</div>
                        </div>
                        <a href="#" class="btn btn-md btn-invert btn-full"><span>CheckOut</span></a>
                    </div>
                </div>
                <a href="#" class="menu-toggle"><i class="icon-menu"></i><i class="icon-cancel2"></i></a>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->