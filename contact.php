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
    <title>AMECRO - Contact Us</title>
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
    <!-- Google map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- Google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="loading-content">
        <div class="loaded-text" data-text="AMECRO">
            AMECRO
        </div>
    </div>
    <!-- Header -->
    <?php
        include('./inc/header.php');
    ?>
    <!-- /Header -->
    <main class="page-main">
        <!-- Breadcrumbs Block -->
        <div class="block breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->
        <h1 class="text-center h-decor">Contact Us</h1>
        <div class="block fullwidth no-pad">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.673466537798!2d138.58340051519409!3d-34.88954508038636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0c8e93ca2b0b1%3A0xdfc8b044d57725c8!2s39A%20Elizabeth%20St%2C%20Prospect%20SA%205082%2C%20Australia!5e0!3m2!1sen!2slk!4v1627362152922!5m2!1sen!2slk"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class=" block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>General Office</h2>
                        <div class="contact-info-sm">
                            <h5>Address</h5>
                            <i class="icon icon-map-marker"></i>No.39A, Elizabeth Street,
                            <br>Prospect SA 5082
                        </div>
                        <div class="contact-info-sm">
                            <h5>Phone 24/7</h5>
                            <i class="icon icon-technology"></i>+61 466654500
                        </div>
                        <div class="contact-info-sm">
                            <h5>Operating Hours</h5>
                            <i class="icon icon-clock"></i>Mon-Fri: 8:00 am – 5:00 pm
                            <br>Sat-Sun: 11:00 am – 16:00 pm
                        </div>
                    </div>
                    <div class="divider visible-sm visible-xs"></div>
                    <div class="col-md-8">
                        <h2 class="text-center h-lg h-decor">Get in Touch</h2>
                        <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
                            <div class="successform text-center">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform text-center">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" class="input-custom input-full" name="name" placeholder="Your name*" required>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" class="input-custom input-full" name="email" placeholder="Email*" required>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" class="input-custom input-full" name="phone" placeholder="Phone">
                            </div>
                            <div class="input-wrapper">
                                <textarea class="textarea-custom input-full" name="message"
                                    placeholder="Message*" required></textarea>
                            </div>
                            <div class="g-recaptcha text-center" data-sitekey="YOUR SITE KEY"
                                style="display: inline-block;"></div>
                            <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha"
                                id="hiddenRecaptcha">
                            <br>
                            <button type="submit" class="btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php
        include('./inc/footer.php')
    ?>
    <!-- /Footer -->
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