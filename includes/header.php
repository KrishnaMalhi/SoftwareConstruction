<html>

<body>
    <header id="masthead" class="clearfix" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <div class="site-subheader site-header">
            <div class="container theme-container">
                <!-- Mini Cart -->
                <ul class="pull-right list-unstyled list-inline">
                    <li class="nav-dropdown">
                        <a href="#">My Account</a>
                        <ul class="nav-dropdown-inner list-unstyled accnt-list">
                            <li> <a href="my-account.html">My Account</a></li>
                            <li> <a href="account-info.html"> Account Information </a></li>
                            <li> <a href="cng-pw.html">Change Password</a></li>
                            <li> <a href="address-book.html">Address Books</a></li>
                            <li> <a href="order-history.html">Order History</a></li>
                            <li> <a href="review-rating.html">Reviews and Ratings</a></li>
                            <li> <a href="return.html">Returns Requests</a></li>
                            <li> <a href="newsletter.html">Newsletter</a></li>
                            <li> <a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                        </ul>
                    </li>
                    <li id="cartContent" class="cartContent">
                        <a id="miniCartDropdown" href="cart.php">
                            My Cart
                            <span class="cart-item-num"><?php items(); ?></span>
                        </a>

                        <div id="miniCartView" class="cartView">
                            <ul id="minicartHeader" class="product_list_widget list-unstyled">
                                <li>
                                    <div class="media clearfix">
                                        <div class="media-lefta">
                                            <a href="single-product.html">
                                                <img src="assets/img/products/cart-popup-1.jpg" alt="hoodie_5_front" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="single-product.html">Flusas Feminin</a>
                                            <span class="price"><span class="amount"><span
                                                        class="fa fa-dollar"></span>20.00</span></span>
                                            <span class="quantity">Qty: 1Pcs</span>
                                        </div>
                                    </div>

                                    <div class="product-remove">
                                        <a href="#" class="btn-remove" title="Remove this item"><i
                                                class="fa fa-close"></i></a>
                                    </div>
                                </li>

                            </ul>

                            <div class="cartActions">
                                <span class="pull-left">Subtotal</span>
                                <span class="pull-right"><span class="amount"><span
                                            class="fa fa-dollar"></span>75.00</span></span>
                                <div class="clearfix"></div>

                                <div class="minicart-buttons">
                                    <div class="col-lg-6">
                                        <a href="cart.html">Your Cart</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="checkout.html" class="minicart-checkout">Checkout</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="checkout.html">Checkout</a>
                    </li>
                    <li class="menu-item">
                        <a href="#login-popup" data-toggle="modal">Login</a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="header-wrap" id="typo-sticky-header">
            <div class="container theme-container reltv-div">

                <div class="pull-right header-search visible-xs">
                    <a id="open-popup-menu" class="nav-trigger header-link-search" href="javascript:void(0)"
                        title="Menu">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="top-header pull-left">
                            <div class="logo-area">
                                <a href="index.html" class="thm-logo fsz-35">
                                    <!--<img src="files/main-logo.png" alt="Goshop HTML Theme">-->
                                    <b class="bold-font-3 wht-clr"> GoShop </b> <span class="thm-clr funky-font"> bikes
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->

                    <div class="col-md-9 col-sm-9 static-div">
                        <div class="navigation pull-left">
                            <!-- Nav bar -->
                            <?php require "navbar.php"?>
                        </div>
                        <div class="pull-right srch-box">
                            <a id="open-popup-search" class="header-link-search" href="javascript:void(0)"
                                title="Search">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

</body>

</html>