<?php

session_start();

include("includes/db.php");                       

include("functions/functions.php");                

?>

<?php

if(isset($_GET['pro_id'])){

$product_id = $_GET['pro_id'];

$get_product = "select * from products where product_id='$product_id'";

$run_product = mysqli_query($con,$get_product);

$row_product = mysqli_fetch_array($run_product);

$p_cat_id = $row_product['p_cat_id'];

$pro_title = $row_product['product_title'];

$pro_price = $row_product['product_price'];

$pro_desc = $row_product['product_desc'];

$pro_img1 = $row_product['product_img1'];

$pro_img2 = $row_product['product_img2'];

$pro_img3 = $row_product['product_img3'];

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];

}


?>

<!DOCTYPE html>
<html>

<?php require "includes/head.php"?>

<body>


    <?php require "includes/header.php"?>

    <div id="content">
        <!-- content Starts -->
        <div class="container">
            <!-- container Starts -->

            <div class="col-md-12">
                <!--- col-md-12 Starts -->

                <ul class="breadcrumb">
                    <!-- breadcrumb Starts -->

                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li><a href="shop.php">Shop</a></li>

                    <li>

                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>">
                            <?php echo $p_cat_title; ?> </a>

                    </li>

                    <li>
                        <?php echo $pro_title; ?> </li>

                </ul>
                <!-- breadcrumb Ends -->


            </div>
            <!--- col-md-12 Ends -->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->

                <?php include("includes/sidebar.php"); ?>

            </div>
            <!-- col-md-3 Ends -->


            <div class="col-md-9">
                <!-- col-md-9 Starts -->

                <div class="row" id="productMain">
                    <!-- row Starts -->

                    <div class="col-sm-6">
                        <!-- col-sm-6 Starts -->

                        <div id="mainImage">
                            <!-- mainImage Starts -->

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <!-- carousel-indicators Starts -->

                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>

                                </ol>
                                <!-- carousel-indicators Ends -->

                                <div class="carousel-inner">
                                    <!-- carousel-inner Starts -->

                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images/<?php echo $pro_img1; ?>"
                                                class="img-responsive">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/<?php echo $pro_img2; ?>"
                                                class="img-responsive">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/<?php echo $pro_img3; ?>"
                                                class="img-responsive">
                                        </center>
                                    </div>

                                </div>
                                <!-- carousel-inner Ends -->

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
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

                        </div>
                        <!-- mainImage Ends -->

                    </div>
                    <!-- col-sm-6 Ends -->


                    <div class="col-sm-6">
                        <!-- col-sm-6 Starts -->

                        <div class="box">
                            <!-- box Starts -->

                            <h1 class="text-center">
                                <?php echo $pro_title; ?> </h1>

                            <?php add_cart(); ?>

                            <form action="details.php?add_cart=<?php echo $product_id; ?>" method="post"
                                class="form-horizontal">
                                <!-- form-horizontal Starts -->

                                <div class="form-group">
                                    <!-- form-group Starts -->

                                    <label class="col-md-5 control-label">Product Quantity </label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 Starts -->

                                        <select name="product_qty" class="form-control">

                                            <option>Select quantity</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>


                                        </select>

                                    </div>
                                    <!-- col-md-7 Ends -->

                                </div>
                                <!-- form-group Ends -->

                                <div class="form-group">
                                    <!-- form-group Starts -->

                                    <label class="col-md-5 control-label">Product Size</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 Starts -->

                                        <select name="product_size" class="form-control">

                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>


                                        </select>

                                    </div>
                                    <!-- col-md-7 Ends -->


                                </div>
                                <!-- form-group Ends -->

                                <p class="price"> $
                                    <?php echo $pro_price; ?> </p>

                                <p class="text-center buttons">
                                    <!-- text-center buttons Starts -->

                                    <button class="btn btn-primary" type="submit">

                                        <i class="fa fa-shopping-cart"></i> Add to Cart

                                    </button>

                                </p>
                                <!-- text-center buttons Ends -->

                            </form>
                            <!-- form-horizontal Ends -->

                        </div>
                        <!-- box Ends -->


                        <div class="row" id="thumbs">
                            <!-- row Starts -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Starts -->

                                <a href="#" class="thumb">

                                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>"
                                        class="img-responsive">

                                </a>

                            </div>
                            <!-- col-xs-4 Ends -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Starts -->

                                <a href="#" class="thumb">

                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>"
                                        class="img-responsive">

                                </a>

                            </div>
                            <!-- col-xs-4 Ends -->

                            <div class="col-xs-4">
                                <!-- col-xs-4 Starts -->

                                <a href="#" class="thumb">

                                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>"
                                        class="img-responsive">

                                </a>

                            </div>
                            <!-- col-xs-4 Ends -->


                        </div>
                        <!-- row Ends -->


                    </div>
                    <!-- col-sm-6 Ends -->


                </div>
                <!-- row Ends -->

                <div class="box" id="details">
                    <!-- box Starts -->

                    <p>
                        <!-- p Starts -->

                    <h4>Product details</h4>

                    <p>
                        <?php echo $pro_desc; ?>
                    </p>

                    <h4> Size </h4>

                    <ul>

                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>

                    </ul>

                    </p>
                    <!-- p Ends -->

                    <hr>

                </div>
                <!-- box Ends -->

                <div id="row same-height-row">
                    <!-- row same-height-row Starts -->

                    <div class="col-md-3 col-sm-6">
                        <!-- col-md-3 col-sm-6 Starts -->

                        <div class="box same-height headline">
                            <!-- box same-height headline Starts -->

                            <h3 class="text-center"> You also like these Products </h3>

                        </div>
                        <!-- box same-height headline Ends -->

                    </div>
                    <!-- col-md-3 col-sm-6 Ends -->

                    <?php

$get_products = "select * from products order by rand() LIMIT 0,3";

$run_products = mysqli_query($con,$get_products); 

while($row_products = mysqli_fetch_array($run_products)) {

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

echo "

<div class='center-responsive col-md-3 col-sm-6' >

<div class='product same-height' >

<a href='details.php?pro_id=$pro_id' >

<img src='admin_area/product_images/$pro_img1' class='img-responsive' >  

</a>

<div class='text' >

<h3> <a href='details.php?pro_id=$pro_id' >$pro_title</a> </h3>

<p class='price' >$$pro_price</p>


</div>


</div>

</div>


";


}


?>


                </div>
                <!-- row same-height-row Ends -->

            </div>
            <!-- col-md-9 Ends -->


        </div>
        <!-- container Ends -->
    </div>
    <!-- content Ends -->



    <?php

include("includes/footer.php");

?>

    <script src="js/jquery.min.js">
    </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>