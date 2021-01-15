<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<?php require "includes/head.php"?>

<body>

    <?php require "includes/header.php"?>
    <div class="main-wrapper clearfix">
        <div class="site-pagetitle jumbotron">
            <div class="container text-center">
                <h3>Goshop Products</h3>

                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <div class="breadcrumbs text-center">
                        <i class="fa fa-home"></i>
                        <span><a href="index.php">Home</a></span>
                        <i class="fa fa-arrow-circle-right"></i>
                        <span class="current">Shop</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="theme-container container">
            <div class="main-container row">
                <aside class="col-md-3 col-sm-4">
                    <?php include("includes/sidebar.php"); ?>
                </aside>

                <main class="col-md-9 col-sm-8 shop-wrap">
                    <div class="row spcbt-30">
                        <div class="col-lg-4 col-sm-6 sorter">
                            <ul class="nav-tabs tabination view-tabs">
                                <li class="active">
                                    <a href="#grid-view" data-toggle="tab">
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#list-view" data-toggle="tab">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </li>
                            </ul>
                            <form action="#" class="sorting-form">
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price" data-live-search="true" data-width="100%"
                                        data-toggle="tooltip" title="Sort By">
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 col-sm-6 woocommerce-result-count"> SHOW 24 ITEMS TOTAL OF 120 ITEMS </div>

                        <div class="col-lg-4 col-sm-12 col-xs-12 view-wrap">
                            <div class="right products-number-selector">
                                <span>View All</span>
                                <span><a href="?productnumber=9" class="highlight-selector">9</a></span>
                                <span><a href="?productnumber=12">12</a></span>
                                <span><a href="?productnumber=24">24</a></span>
                            </div>

                        </div>
                    </div>

                    <div class="tab-content">
                        <!-- Product Grid View -->
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            <div class="row text-center hvr2 clearfix">
                                <?php
                                    if(!isset($_GET['p_cat'])) {
                                        if(!isset($_GET['cat'])){
                                            $per_page=6;
                                            if(isset($_GET['page'])){
                                                $page = $_GET['page'];
                                            }else {
                                                $page=1;
                                            }
                                            $start_from = ($page-1) * $per_page ;
                                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                                            $run_products = mysqli_query($con,$get_products);
                                            while($row_products=mysqli_fetch_array($run_products)){
                                                $pro_id = $row_products['product_id'];
                                                $pro_title = $row_products['product_title'];
                                                $pro_price = $row_products['product_price'];
                                                $pro_img1 = $row_products['product_img1'];
                                                echo "
                                                    <div class='col-md-4 col-sm-6' >
                                                            <div class='portfolio-wrapper' >
                                                                <div class='portfolio-thumb'>
                                                                    <a href='details.php?pro_id=$pro_id' >
                                                                        <img src='admin_area/product_images/$pro_img1' class='img-responsive' >
                                                                    </a>
                                                                    <div class='portfolio-content' >
                                                                        <div class='rating'>
                                                                            <span class='star active'></span>
                                                                            <span class='star active'></span>
                                                                            <span class='star active'></span>
                                                                            <span class='star'></span>
                                                                            <span class='star'></span>
                                                                        </div>
                                                                        <div class='pop-up-icon'>
                                                                            <a data-toggle='modal' href='details.php?pro_id=$pro_id' class='center-link'><i class='fa fa-search'></i></a>
                                                                            <a href='details.php?pro_id=$pro_id' class='left-link'><i class='fa fa-heart'></i></a>
                                                                            <a class='right-link' href='details.php?pro_id=$pro_id'><i class='cart-icn'> </i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='product-content'>
                                                                    <h3> <a class='title-3 fsz-16' href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                                                    <p class='font-3'>Price: <span class='thm-clr'> $pro_price </span> </p>
                                                                </div>
                                                            </div>
                                                        </div>";
                                            }
                                        }
                                    }
                                ?>
                            </div>
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <!-- pagination Starts -->
                                    <?php
                                        $query = "select * from products";
                                        $result = mysqli_query($con,$query);
                                        $total_records = mysqli_num_rows($result);
                                        $total_pages = ceil($total_records / $per_page);
                                        echo "
                                            <li>
                                                <a class='next page-numbers' href='shop.php?page=1' >
                                                    <i class='fa fa-angle-left'></i>
                                                </a>
                                            </li>";
                                            for ($i=1; $i<=$total_pages; $i++){
                                                echo "
                                                <li>
                                                    <a class='page-numbers current' href='shop.php?page=".$i."' >".$i."</a>
                                                </li>";
                                            };
                                            echo "
                                            <li>
                                                <a href='shop.php?page=$total_pages' >
                                                    <i class='fa fa-angle-right'></i>
                                                </a>
                                            </li>";
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- / Product Grid View -->

                        <!-- Product List View -->
                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="cat-list-view">
                                <div class="hvr2 row">
                                    <?php
                                        if(!isset($_GET['p_cat'])) {
                                            if(!isset($_GET['cat'])){
                                                $per_page=6;
                                                if(isset($_GET['page'])){
                                                    $page = $_GET['page'];
                                                }else {
                                                    $page=1;
                                                }
                                                $start_from = ($page-1) * $per_page ;
                                                $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                                                $run_products = mysqli_query($con,$get_products);
                                                while($row_products=mysqli_fetch_array($run_products)){
                                                    $pro_id = $row_products['product_id'];
                                                    $pro_title = $row_products['product_title'];
                                                    $pro_price = $row_products['product_price'];
                                                    $pro_img1 = $row_products['product_img1'];
                                                    echo "
                                                    <div class='portfolio-wrapper'>
                                                        <div class='col-md-4 col-sm-6' >
                                                            <div class='portfolio-thumb'>
                                                                <a href='details.php?pro_id=$pro_id' >
                                                                    <img src='admin_area/product_images/$pro_img1' class='img-responsive' >
                                                                </a>
                                                                <div class='portfolio-content' >
                                                                    <div class='pop-up-icon'>
                                                                        <a class='center-link' data-toggle='modal' href='details.php?pro_id=$pro_id' class='center-link'><i class='fa fa-search'></i></a>
                                                                        <a class='left-link' href='details.php?pro_id=$pro_id' class='left-link'><i class='fa fa-heart'></i></a>
                                                                        <a class='right-link' href='details.php?pro_id=$pro_id'><i class='cart-icn'> </i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-8 col-sm-6'>
                                                            <div class='product-content'>
                                                                <a class='title-3 fsz-16' href='#'> $pro_title </a>
                                                                <div class='rating'>
                                                                    <span class='star active'></span>
                                                                    <span class='star active'></span>
                                                                    <span class='star active'></span>
                                                                    <span class='star'></span>
                                                                    <span class='star'></span>
                                                                </div>
                                                                <p class='font-3'>Price: <span class='thm-clr'> $pro_price </span> </p>
                                                                <p class='font-3'> Available:<span class='grn-clr'> In Stock </span>
                                                                </p>
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                                    condimentum eros idoni
                                                                    rutrum fermentum. Proin nec felis dui. Vestibulum ante ipsum
                                                                    primis
                                                                    in faucibus orci
                                                                    luctus et ultrices posuere cubilia Curae.</p>
                                                                <a class='fancy-btn fancy-btn-small' href='single-product.html'>
                                                                    Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>";
                                                    }
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            <nav class="woocommerce-pagination">
                                <ul class="page-numbers">
                                    <!-- pagination Starts -->
                                    <?php
                                        $query = "select * from products";
                                        $result = mysqli_query($con,$query);
                                        $total_records = mysqli_num_rows($result);
                                        $total_pages = ceil($total_records / $per_page);
                                        echo "
                                            <li>
                                                <a class='next page-numbers' href='shop.php?page=1' >
                                                    <i class='fa fa-angle-left'></i>
                                                </a>
                                            </li>";
                                            for ($i=1; $i<=$total_pages; $i++){
                                                echo "
                                                <li>
                                                    <a class='page-numbers current' href='shop.php?page=".$i."' >".$i."</a>
                                                </li>";
                                            };
                                            echo "
                                            <li>
                                                <a href='shop.php?page=$total_pages' >
                                                    <i class='fa fa-angle-right'></i>
                                                </a>
                                            </li>";
                                    ?>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <!-- / Product List View -->

            </div>
            </main>
        </div>
    </div>
    </div>
    <!-- content Ends -->

    <?php include("includes/footer.php"); ?>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>