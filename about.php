<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<?php require "includes/head.php"?>

<body class="blog">

    <!-- HEADER -->
    <?php require "includes/header.php"?>
    <!-- / HEADER -->

    <!-- CONTENT + SIDEBAR -->
    <div class="main-wrapper clearfix">
        <div class="site-pagetitle jumbotron">
            <div class="container  theme-container text-center">
                <h3>Goshop My Account</h3>

                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <div class="breadcrumbs text-center">
                        <i class="fa fa-home"></i>
                        <span><a href="index.html">Home</a></span>
                        <i class="fa fa-arrow-circle-right"></i>
                        <span class="current"> About Us </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="theme-container container">

            <!-- About Starts -->
            <div class="gst-spc3 row">
                <div class="about-box">
                    <div class="col-sm-4  spcbt-30">
                        <h2 class="title-3 no-margin"> the brand. </h2>
                    </div>
                    <div class="col-sm-8 about-info space-bottom-50">
                        <p> <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit !</b> </p>
                        <p> Suspendisse ultricies scelerisque turpis, elementum ornare arcu posuere mollis. Donec vitae
                            tempor ante, ut tempus augue. Maecenas aliquam, ante quis egestas molestie, ipsum sapien
                            faucibus lorem, ac placerat magna purus id quam. Proin id felis sapien.</p>
                        <p> Mauris metus eros, finibus et eros eget, vehicula tincidunt ex. Integer dictum turpis felis,
                            at gravida lectus vestibulum et. Mauris vitae massa pellentesque, rutrum lacus sit amet,
                            dictum massa. </p>
                    </div>
                </div>
                <div class="about-box">
                    <div class="col-sm-4  spcbt-30">
                        <h2 class="title-3 no-margin"> contact us. </h2>
                    </div>
                    <div class="col-sm-8 about-info spcbt-30">
                        <ul class="about-contact">
                            <li> <i class="fa fa-map-marker fsz-20"></i> <span class="desc"> 1234 New Design St,
                                    Melbourne, Australia. </span> </li>
                            <li> <i class="fa fa-envelope-o fsz-20"></i> <span class="desc"> hello@goshoptheme.com
                                </span> </li>
                            <li> <i class="fa fa-phone fsz-20"></i> <span class="desc"> (0091) 8547 632521 </span> </li>
                        </ul>
                        <p> <strong class="gray-color">HOUR WORK:</strong> <b> MONDAY - FRIDAY / 08AM - 05PM</b> </p>
                    </div>
                </div>
                <div class="about-box">
                    <div class="col-sm-4  spcbt-30">
                        <h2 class="title-3 no-margin"> our team. </h2>
                    </div>
                    <div class="col-sm-8 about-info spcbt-30">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6 spcbt-30">
                                <div class="team-wrap">
                                    <img alt="" src="assets/img/extra/team-1.jpg">
                                    <div class="team-detail">
                                        <a href="#" class="title-1"> Alex luther </a>
                                        <h5 class="size-13 no-margin">Co-Founder</h5>
                                        <ul class="social-icon list-items">
                                            <li> <a href="#" class="fa fa-twitter"></a> </li>
                                            <li> <a href="#" class="fa fa-facebook"></a> </li>
                                            <li> <a href="#" class="fa fa-dribbble"></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 spcbt-30">
                                <div class="team-wrap">
                                    <img alt="" src="assets/img/extra/team-2.jpg">
                                    <div class="team-detail">
                                        <a href="#" class="title-1"> Alex luther </a>
                                        <h5 class="size-13 no-margin">Co-Founder</h5>
                                        <ul class="social-icon list-items">
                                            <li> <a href="#" class="fa fa-twitter"></a> </li>
                                            <li> <a href="#" class="fa fa-facebook"></a> </li>
                                            <li> <a href="#" class="fa fa-dribbble"></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 spcbt-30">
                                <div class="team-wrap">
                                    <img alt="" src="assets/img/extra/team-3.jpg">
                                    <div class="team-detail">
                                        <a href="#" class="title-1"> Alex luther </a>
                                        <h5 class="size-13 no-margin">Co-Founder</h5>
                                        <ul class="social-icon list-items">
                                            <li> <a href="#" class="fa fa-twitter"></a> </li>
                                            <li> <a href="#" class="fa fa-facebook"></a> </li>
                                            <li> <a href="#" class="fa fa-dribbble"></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 spcbt-30">
                                <div class="team-wrap">
                                    <img alt="" src="assets/img/extra/team-4.jpg">
                                    <div class="team-detail">
                                        <a href="#" class="title-1"> Alex luther </a>
                                        <h5 class="size-13 no-margin">Co-Founder</h5>
                                        <ul class="social-icon list-items">
                                            <li> <a href="#" class="fa fa-twitter"></a> </li>
                                            <li> <a href="#" class="fa fa-facebook"></a> </li>
                                            <li> <a href="#" class="fa fa-dribbble"></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 spcbt-30">
                                <div class="team-wrap">
                                    <img alt="" src="assets/img/extra/team-5.jpg">
                                    <div class="team-detail">
                                        <a href="#" class="title-1"> Alex luther </a>
                                        <h5 class="size-13 no-margin">Co-Founder</h5>
                                        <ul class="social-icon list-items">
                                            <li> <a href="#" class="fa fa-twitter"></a> </li>
                                            <li> <a href="#" class="fa fa-facebook"></a> </li>
                                            <li> <a href="#" class="fa fa-dribbble"></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 spcbt-30">
                                <div class="team-wrap">
                                    <img alt="" src="assets/img/extra/team-6.jpg">
                                    <div class="join-team">
                                        <a href="#" class="title-1"> Join Team </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / About Ends -->

        </div>



        <div class="clear"></div>
    </div>

    <!-- Subscribe News -->
    <section class="gst-row gst-color-white row-newsletter ovh">
        <div class="gst-wrapper">
            <div class="gst-column col-lg-12 no-padding text-center">
                <div class="fancy-heading text-center">
                    <h3 class="wht-clr">Subscribe Newsletter</h3>
                    <h5 class="funky-font-2 wht-clr">Sign up for <span class="thm-clr">Special Promotion</span></h5>
                </div>

                <p><strong>Lorem ipsum dolor sit amet</strong>, consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod tincidunt ut<br /> laoreet dolore magna aliquam erat volutpat.</p>

                <div class="gst-empty-space clearfix"></div>

                <form>
                    <div class="col-md-2">
                        <h4> <strong class="fsz-20"> <span class="thm-clr">Subscribe</span> to us </strong> </h4>
                    </div>
                    <div class="gst-empty-space visible-sm clearfix"></div>
                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="dblock" placeholder="Enter your name" />
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <input type="text" class="dblock" placeholder="Enter your email address" />
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <input type="submit" class="dblock fancy-button" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- / Subscribe News -->

    <!-- FOOTER -->
    <footer class="site-footer clearfix" itemscope itemtype="https://schema.org/WPFooter">
        <div class="site-main-footer container theme-container">
            <div class="row">
                <div class="col-md-3 col-sm-6 clearfix">
                    <section class="widget footer-widget widget_text clearfix">
                        <div class="textwidget">
                            <p class="fsz-35"> <span class="bold-font-3 wht-clr">GoShop</span> <span
                                    class="thm-clr funky-font">bikes</span> </p>
                            <p>ECommerce HTML Template</p>
                            <div class="author-info-social">
                                <a class="goshop-share rcc-google" href="http://google.com" rel="nofollow"
                                    target="_blank">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="goshop-share rcc-twitter" href="http://twitter.com" rel="nofollow"
                                    target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="goshop-share rcc-facebook" href="http://facebook.com" rel="nofollow"
                                    target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="goshop-share rcc-linkedin" href="http://linkedin.com" rel="nofollow"
                                    target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="goshop-share rcc-pinterest" href="http://pinterest.com" rel="nofollow"
                                    target="_blank">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-md-3 col-sm-6 clearfix">
                    <section class="widget footer-widget widget_nav_menu clearfix">
                        <h6 class="widget-title">My Account</h6>
                        <ul>
                            <li class="menu-item"><a href="#">Personal Information</a></li>
                            <li class="menu-item"><a href="#">Address</a></li>
                            <li class="menu-item"><a href="#">Discount</a></li>
                            <li class="menu-item"><a href="#">Order History</a></li>
                        </ul>
                    </section>
                </div>

                <div class="col-md-3 col-sm-6 clearfix">
                    <section id="nav_menu-3" class="widget footer-widget widget_nav_menu clearfix">
                        <h6 class="widget-title">Our Services</h6>
                        <ul>
                            <li class="menu-item"><a href="#">Shipping Return</a></li>
                            <li class="menu-item"><a href="#">International Shipping</a></li>
                            <li class="menu-item"><a href="#">Secure Shopping</a></li>
                            <li class="menu-item"><a href="#">Affiliates</a></li>
                            <li class="menu-item"><a href="#">F.A.Q</a></li>
                        </ul>
                    </section>
                </div>

                <div class="col-md-3 col-sm-6 clearfix">
                    <section id="text-6" class="widget footer-widget widget_text clearfix">
                        <h6 class="widget-title">Newsletter</h6>
                        <div class="textwidget">
                            Lorem ipsum dolor sit amet conseret adipiscing elit sed diam nonunem.
                            <form class="mc4wp-form">
                                <p>
                                    <label>Email address: </label>
                                    <input type="email" name="EMAIL" placeholder="Your email address" required />
                                </p>

                                <p>
                                    <button class="submit"> <i class="fa fa-envelope-o"></i> </button>
                                </p>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

            <div class="post-footer">
                <div class="payment-systems text-center">
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-1.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-2.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-3.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-4.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-5.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-6.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-7.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-8.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-1.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-2.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-5.png" alt=""></a> </div>
                    <div class="item"> <a href="#"><img src="assets/img/extra/payment-3.png" alt=""></a> </div>
                </div>
            </div>
        </div>

        <div class="subfooter text-center">
            <div class="container theme-container">
                <p>Copyright &copy; <a href="#" class="thm-clr">jThemes Studio</a>. All Right Reserved 2015</p>
            </div>
        </div>
    </footer>

    <!-- Search Popup -->
    <div class="popup-box page-search-box">
        <div>
            <div class="popup-box-inner">
                <form>
                    <input class="search-query" type="text" placeholder="Search and hit enter" />
                </form>
            </div>
        </div>
        <a href="javascript:void(0)" class="close-popup-box close-page-search"><i class="fa fa-close"></i></a>
    </div>
    <!-- / Search Popup -->

    <!-- Popup: Login 1 -->
    <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <button type="button" class="close close-btn popup-cls" data-dismiss="modal" aria-label="Close"> <i
                    class="fa-times fa"></i> </button>

            <div class="modal-content login-1 wht-clr">
                <div class="login-wrap text-center">
                    <h2 class="fsz-35 spcbtm-15"> <span class="bold-font-3 wht-clr">GoShop</span> <span
                            class="thm-clr funky-font">fashion</span> </h2>
                    <p class="fsz-20 title-3"> WELCOME TO OUR WONDERFUL WORLD </p>
                    <p class="fsz-15 bold-font-4"> Did you know that we ship to over <span class="thm-clr"> 24 different
                            countries </span> </p>

                    <div class="login-form">
                        <a class="fb-btn btn spcbtm-15" href="#"> <i class="fa fa-facebook btn-icon"></i>Login with
                            Facebook </a>

                        <p class="bold-font-2 fsz-12 signup"> OR SIGN UP </p>

                        <form class="login">
                            <div class="form-group"><input type="text" placeholder="Email" class="form-control"></div>
                            <div class="form-group"><input type="text" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="alt fancy-button" type="submit"> <span class="fa fa-lightbulb-o"></span>
                                    Login</button>
                            </div>
                        </form>

                        <p>* Denotes mandatory field.</p>
                        <p>** At least one telephone number is required.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Popup: Login 1 -->

    <!-- Top -->
    <div class="to-top" id="to-top"> <i class="fa fa-long-arrow-up"></i> </div>

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-2.1.3.js"></script>
    <script src="assets/plugins/royalslider/jquery.royalslider.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-select-1.9.3/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
    <script src="assets/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/plugins/isotope-master/dist/isotope.pkgd.min.js"></script>

    <!-- Page JS -->
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>