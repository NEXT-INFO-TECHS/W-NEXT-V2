<?php
require_once("include/dbController.php");
$db_handle = new DBController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <?php
    $url = $_SERVER['REQUEST_URI'];
    $title = substr($url, strrpos($url, '/') + 1);
    $title = strtok($title, '?');
    $string = str_replace("-", " ", $title);

    $extension = '../';
    $bcName = '';
    $meta_title = '';
    $meta_description = '';
    $meta_keywords = '';
    $image = '';
    $description = '';


    $query = "SELECT * FROM blog where title='$string'";

    $data = $db_handle->runQuery($query);
    $row = $db_handle->numRows($query);
    for ($j = 0; $j < $row; $j++) {
        $bcName = ucwords(strtolower($data[$j]["title"]));
        $meta_title = $data[$j]["meta_title"];
        $meta_description = $data[$j]["meta_description"];
        $meta_keywords = $data[$j]["meta_keywords"];
        $image = $data[$j]["image"];
        $description = $data[$j]["description"];

    }

    if ($row == 0) {
        echo "<script>
                window.location.href='../Home';
                </script>";
    }
    ?>


    <meta name="description" content="<?php echo substr($meta_description, 0, 155); ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="author" content="Next Info Tech">

    <meta property="og:title" content="<?php echo $meta_title; ?>" />
    <meta property="og:description" content="<?php echo substr($meta_description, 0, 155); ?>" />
    <meta content="http://nextinfotechs.com/<?php echo $image; ?>" property="og:image"/>
    <meta content="image/png" property="og:image:type"/>
    <meta content="1920" property="og:image:width"/>
    <meta content="1227" property="og:image:height"/>
    <meta content="Next Info Techs Limited" property="og:image:alt"/>
    <meta content="Next Info Techs Limited" property="og:description"/>
    <meta content="https://nextinfotechs.com/" property="og:url"/>
    <meta content="website" property="og:type"/>


    <title><?php echo $bcName; ?> | NEXT INFO TECHS</title>
    <link href="<?php echo $extension; ?>assets/images/logo/favicon.ico" rel="icon" type="image/x-icon">

    <link href="<?php echo $extension; ?>assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $extension; ?>assets/vendor/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet"/>
    <link href="<?php echo $extension; ?>assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href="<?php echo $extension; ?>assets/css/style.css" rel="stylesheet"/>

    <style>
        .next-work-title {
            font-size: 30px;
        }
    </style>
</head>
<body>

<!-- Header Start -->
<header>
    <nav class="navbar navbar-expand-lg bg-nav fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img alt="" class="img-fluid next-logo"
                                                  src="assets/images/logo/NEXT-logo.png"/></a>
            <!--<div class="collapse-social-icons" style="position: inherit;margin-right: .75em;margin-left: auto">
                <form class="d-flex" role="search">
                    <a class="btn btn-success next-colapse-btn">Get started</a>
                </form>
            </div>-->
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent"
                    data-bs-toggle="collapse" type="button">
                <i class="fa-solid fa-bars next-mobile-menu mobile-nav-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="myNav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $extension; ?>Home#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $extension; ?>Home#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $extension; ?>Home#web">WEB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $extension; ?>Home#graphic">GRAPHIC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $extension; ?>Home#automation">AUTOMATION</a>
                    </li>
                    <li class="nav-item active-nav">
                        <a class="nav-link" href="<?php echo $extension; ?>Contact">CONTACT</a>
                    </li>
                </ul>
                <form class="d-flex next-nav-icon" role="search">
                    <a class="btn btn-success next-btn-header"
                       href="https://api.whatsapp.com/message/VBCGRP7FAFCOD1?autoload=1&app_absent=0">
                        Get started
                    </a>
                </form>
            </div>
        </div>
    </nav>
</header>
<!-- Header End -->

<!-- Title Start -->
<section class="next-title">
    <h1 class="text-center next-work-title text-white"><?php echo $bcName; ?></h1>
</section>
<!-- Title End -->

<!-- Contact Start -->
<section class="next-web">
    <div class="container pt-5 pb-5 text-center">
        <h1 class="next-work-title text-start pt-5 pb-4">
            <?php echo $bcName; ?>
        </h1>
        <div class="row text-start mt-4">
            <div class="col-xl-12 mb-4 text-white">
                <div class="text-center mb-3">
                    <img src="<?php echo $extension; ?><?php echo $image; ?>" class="img-fluid" alt=""/>
                </div>
                <?php echo $description; ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

<!-- Footer Start -->
<section class="next-footer">
    <!-- Press Start -->
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <div class="mt-5 mb-5">
                    <div class="text-center next-section-title">
                        <h1>PRESS & MEDIA</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <section class="customer-logos slider">
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/1.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/2.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/3.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/4.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/5.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/6.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/7.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/8.jpg"/></div>
                    <div class="slide"><img alt="" src="<?php echo $extension; ?>assets/images/press/9.jpg"/></div>
                </section>
            </div>
        </div>
    </section>
    <!-- Press End -->
    <div class="container pt-5 pb-5 text-center" id="contact">
        <p class="next-footer-content">
            LET'S WORK TOGETHER
        </p>
        <h1 class="next-footer-title">
            WE LOVE TO LISTEN TO <br/>
            YOUR REQUIREMENTS
        </h1>
        <a class="btn btn-success next-btn-footer mt-3" href="#">
            Estimate project <i class="fa-solid fa-angle-right"></i>
        </a>
        <p class="mt-4 next-footer-call">
            Or mail us now <br class="d-lg-none d-block"/>
            <i class="fa-solid fa-envelope"></i> contact@nextinfotechs.com
        </p>
    </div>
    <div class="next-footer-social">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 text-lg-start text-center">
                    <p class="next-footer-social-text">
                        <a class="footer-nav-link"
                           href="https://api.whatsapp.com/message/VBCGRP7FAFCOD1?autoload=1&app_absent=0" target="_blank">
                            <span class="next-whatsapp">Whatsapp:</span> +1 (646) 631-1557
                        </a>
                        &nbsp;
                        <span class="d-md-inline d-none">|</span>
                        &nbsp;
                        <a class="footer-nav-link" href="https://join.skype.com/invite/whLjFofI5M1I" target="_blank">
                            <span class="next-skype">Skype:</span> live:.cid.6cb903025cfa5585
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 text-lg-end text-center">
                    <p class="next-footer-social-text-2">
                        <a class="footer-nav-link" href="<?php echo $extension; ?>Contact">
                            Contact Us
                        </a>
                        &nbsp;
                        |
                        &nbsp;
                        <a class="footer-nav-link" href="<?php echo $extension; ?>FAQ">
                            FAQ
                        </a>
                        &nbsp;
                        |
                        &nbsp;
                        <a class="footer-nav-link" href="<?php echo $extension; ?>Terms-and-Condition">
                            Terms & Condition
                        </a>
                        &nbsp;
                        |
                        &nbsp;
                        <a class="footer-nav-link" href="<?php echo $extension; ?>Privacy-Policy">
                            Privacy & Policy
                        </a>
                    </p>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-6 mx-auto text-center">
                        <div class="row">
                            <div class="col-2 ms-auto">
                                <a href="https://www.facebook.com/">
                                    <img alt="" class="img-fluid" src="<?php echo $extension; ?>assets/images/contact/icon/facebook.png"/>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="https://www.instagram.com/">
                                    <img alt="" class="img-fluid" src="<?php echo $extension; ?>assets/images/contact/icon/instagram.png"/>
                                </a>
                            </div>
                            <div class="col-2 me-auto">
                                <a href="mailto:contatc@nextinfotechs.com">
                                    <img alt="" class="img-fluid" src="<?php echo $extension; ?>assets/images/contact/icon/email2.png"/>
                                </a>
                            </div>
                        </div>
                        <p class="mt-3 next-footer-copyright">
                            Copyright © 2023 Next info Techs Limited. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->

<button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

<script src="<?php echo $extension; ?>assets/vendor/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/jQuery/jquery-3.6.4.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/OwlCarousel/js/owl.carousel.min.js"></script>
<script src='<?php echo $extension; ?>assets/vendor/Slick/slick.js'></script>
<script src="<?php echo $extension; ?>assets/js/main.js"></script>
</body>
</html>