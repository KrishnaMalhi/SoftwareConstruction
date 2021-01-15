<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<?php require "includes/head.php"?>

<body>

    <!-- <div id="top"> -->
    <!-- top Starts -->
    <?php require "includes/header.php"?>

    <div class="main-wrapper clearfix">
        <!-- carousel slide Ends --->
        <div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- carousel slide Starts --->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- carousel-indicators Ends -->

                <div class="carousel-inner">
                    <!-- carousel-inner Starts -->

                    <?php
                        $get_slides = "select * from slider LIMIT 0,1";
                        $run_slides = mysqli_query($con,$get_slides);
                        while($row_slides=mysqli_fetch_array($run_slides)){
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];
                            echo "
                            <div class='item active'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </div>";
                        }
                    ?>

                    <?php
                        $get_slides = "select * from slider LIMIT 1,3 ";
                        $run_slides = mysqli_query($con,$get_slides);
                        while($row_slides = mysqli_fetch_array($run_slides)) {
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];
                            echo "
                            <div class='item'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </div>";
                        }
                    ?>

                </div>
                <!-- carousel-inner Ends -->

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <!-- left carousel-control Starts -->

                    <span class="glyphicon glyphicon-chevron-left"> </span>

                    <span class="sr-only"> Previous </span>

                </a>
                <!-- left carousel-control Ends -->

                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <!-- right carousel-control Starts -->

                    <span class="glyphicon glyphicon-chevron-right"> </span>

                    <span class="sr-only"> Next </span>

                </a>
                <!-- right carousel-control Ends -->

            </div>
            <!-- carousel slide Ends --->
        </div>
        <section class="service-sec">
            <div class="container theme-container">
                <div class="service">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="left">
                                <div class="icon"><img src="assets/img/extra/icon-delivery.png" alt="Delivery"></div>
                            </div>

                            <p class="title-3 fsz-18">Fast delivery</p>
                            <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
                        </div>

                        <div class="col-sm-4">
                            <div class="left">
                                <div class="icon"><img src="assets/img/extra/icon-money-back.png" alt="Money back">
                                </div>
                            </div>

                            <p class="title-3 fsz-18">100% money back</p>
                            <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
                        </div>

                        <div class="col-sm-4">
                            <div class="left">
                                <div class="icon"><img src="assets/img/extra/icon-support.png" alt="Support"></div>
                            </div>

                            <p class="title-3 fsz-18">Awesome support</p>
                            <p class="second-heading">Did you know that we ship to over 24 different countries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gst-spc1 row-arrivals woocommerce ovh light-bg">
            <div class="container theme-container">
                <div class="gst-column col-lg-12 no-padding text-center">
                    <div class="fancy-heading text-center">
                        <h3><span class="thm-clr">New</span> Arrivals</h3>
                        <h5 class="funky-font-2">Trending Fashion</h5>
                    </div>

                    <!-- Filter for items -->
                    <div class="clearfix tabs space-15">
                        <ul class="filtrable products_filter">
                            <li class="active"><a href="#" data-filter=".cat-1">CLOTHING</a></li>
                            <li class=""><a href="#" data-filter=".cat-2">Woman</a></li>
                            <li class=""><a href="#" data-filter=".cat-3">Men</a></li>
                            <li class=""><a href="#" data-filter=".cat-4">Kid's</a></li>
                            <li class=""><a href="#" data-filter=".cat-5">Accessories</a></li>
                            <li class=""><a href="#" data-filter=".cat-6">Shoes</a></li>
                        </ul>
                    </div>

                    <!-- Portfolio items -->
                    <div class="row isotope isotope-items cat-filter hvr2">
                        <?php getPro(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="gst-compare dscnt-bnnr">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dscnt-3">
                <div class="col-lg-7 no-padding right">
                    <h5 class="title-1 fsz-35">Popular Products</h5>

                    <h3 class="sec-title fsz-45">
                        <span class="thm-clr"> WINTER </span> JACKET
                    </h3>
                    <p class="fsz-16 blklt-clr no-mrgn">PRE SEASON EVENT AT OUR <b class="fw900">NEW ARRIVAL</b></p>
                    <p> <i>*Discount applied automatically at checkout</i> </p>
                    <a class="smpl-btn view-all" href="#"> SHOP ALL JACKET NOW </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 dscnt-4">
                <div class="col-lg-8 no-padding wht-clr">
                    <h5 class="title-1 fsz-35"> Trending Fashion </h5>
                    <h2 class="sec-title fsz-45"> END OF <span class="clr1"> SEASON </span> </h2>
                    <p class="fsz-16 no-mrgn">PRE SEASON EVENT AT OUR <b class="fw900">NEW ARRIVAL</b></p>
                    <p> <i>*Discount applied automatically at checkout</i> </p>
                    <a class="smpl-btn view-all" href="#"> SHOP ALL JACKET NOW </a>
                </div>
            </div>

            <div class="descount bold-font-2">
                <div class="rel-div">
                    <p> DISCOUNT UP TO 75% </p>
                </div>
            </div>
        </section>
        <section class="gst-spc1 row-arrivals woocommerce ovh">
            <div class="container theme-container">
                <div class="gst-column col-lg-12 no-padding text-center">
                    <div class="fancy-heading text-center">
                        <h3><span class="thm-clr">Top</span> Collections</h3>
                        <h5 class="funky-font-2">Choose Your Collections</h5>
                    </div>

                    <!-- Filter for items -->
                    <div class="clearfix tabs space-15">
                        <ul class="coll-filtrable products_filter">
                            <li class="active"><a href="#" data-filter="*">All Product</a></li>
                            <li class=""><a href="#" data-filter=".colltn-1">BEST SELLER </a></li>
                            <li class=""><a href="#" data-filter=".colltn-2">NEW PRODUCT</a></li>
                            <li class=""><a href="#" data-filter=".colltn-3">POPULAR</a></li>
                        </ul>
                    </div>

                    <!-- Portfolio items -->
                    <div class="row collection hvr2">
                        <div class="col-md-3 col-sm-6 col-xs-12 isotope-item colltn-1 colltn-2">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-5.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> CICLYSMO JACKET </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 isotope-item colltn-1 colltn-3">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-6.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> LYCRA BITZ MEN CLOTHING </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 isotope-item  colltn-2">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-7.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> CICLYSMO JACKET </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 isotope-item colltn-1 colltn-3">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-8.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> LYCRA BITZ MEN CLOTHING </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clear">
            <div class="prod-offers">
                <div class="container theme-container">
                    <div class="col-md-6 col-sm-8 offers-img">
                        <img src="assets/img/banner/offer.png" alt="">
                    </div>
                    <div class="col-md-6 col-sm-8 middle-box">
                        <div class="offers-cntnt cnt-tbl">
                            <div class="middle">
                                <h2 class="funky-font-2 fsz-25 no-mrgn"> Summer Hot Products </h2>
                                <h2 class="title-2 fsz-50 no-mrgn"> <span class="thm-clr">FREE</span> YOUR RUN </h2>
                                <p class="title-3 fsz-15"> ULTIMATE FLEXIBILITY FOR MORE NATURAL RIDE </p>
                                <p class="spc-15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibhumils euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                    lobortis nisl ut aliquip ex etlisun commodo consequat. </p>
                                <p class="spc-15"></p>
                                <a class="fancy-btn-black fancy-btn-small" href="#">Learn More</a> <a
                                    class="fancy-btn fancy-btn-small" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="spc-wrp row-arrivals woocommerce clear">
            <div class="container theme-container">
                <div class="gst-column col-lg-12 no-padding text-center">
                    <div class="fancy-heading text-center spcbtm-15">
                        <h3><span class="thm-clr">Special</span> Offers</h3>
                        <h5 class="funky-font-2"> Special price only this month </h5>
                    </div>

                    <!-- Portfolio items -->
                    <div class="row hvr2 spc-ofr">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-9.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> CICLYSMO JACKET </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-10.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> LYCRA BITZ MEN CLOTHING </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-3.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star half"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> CICLYSMO JACKET </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-4.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> LYCRA BITZ MEN CLOTHING </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-5.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> CICLYSMO JACKET </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-6.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> LYCRA BITZ MEN CLOTHING </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-7.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> CICLYSMO JACKET </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="assets/img/products/cat-8.jpg" alt="">
                                    <div class="portfolio-content">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                        <div class="pop-up-icon">
                                            <a data-toggle="modal" href="#product-preview" class="center-link"><i
                                                    class="fa fa-search"></i></a>
                                            <a href="#" class="left-link"><i class="fa fa-heart"></i></a>
                                            <a class="right-link" href="#"><i class="cart-icn"> </i></a>
                                        </div>
                                        <div class="all-view">
                                            <a href="#" class="fancy-btn-alt fancy-btn-small">View All Jeans</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3> <a class="title-3 fsz-16" href="#"> LYCRA BITZ MEN CLOTHING </a> </h3>
                                    <p class="font-3">Price: <span class="thm-clr"> $299.00 </span> <del> $599.00 </del>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section class="gst-row gst-color-white row-they-say2 ovh" id="they-say-carousel">
            <div class="container theme-container">
                <div class="gst-column col-lg-12 no-padding text-center">
                    <div class="fancy-heading text-center wht-clr">
                        <h3>They Says</h3>
                        <h5 class="funky-font-2">Happy Clients</h5>
                    </div>

                    <div class="quotes-carousel">
                        <div class="they-say nav-2">
                            <div class="item">
                                <p><strong>Cycling is a healthy</strong>, fun and exciting way to travel. No matter what
                                    type of cycling you're into, we;ve got a bike for you. We stock one of the larget
                                    bicycle ranges everywhere.</p>
                                <cite>
                                    <strong>JESSICA WILSON</strong> - France
                                </cite>
                            </div>

                            <div class="item">
                                <p><strong>Cycling is a healthy</strong>, fun and exciting way to travel. No matter what
                                    type of cycling you're into, we;ve got a bike for you. We stock one of the larget
                                    bicycle ranges everywhere.</p>
                                <cite>
                                    <strong>JESSICA WILSON</strong> - France
                                </cite>
                            </div>

                            <div class="item">
                                <p><strong>Cycling is a healthy</strong>, fun and exciting way to travel. No matter what
                                    type of cycling you're into, we;ve got a bike for you. We stock one of the larget
                                    bicycle ranges everywhere.</p>
                                <cite>
                                    <strong>JESSICA WILSON</strong> - France
                                </cite>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="container theme-container">
            <div class="brand-wrap2">
                <div class="brand-slider text-center">
                    <div class="item"> <a href="#"><img src="assets/img/extra/brand-1.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/brand-2.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/brand-3.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/brand-1.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/brand-4.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/brand-2.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/brand-3.png" alt=""></a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>



    <?php include("includes/footer.php"); ?>

    <script src="js/jquery.min.js">
    </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>