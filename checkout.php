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

                    <li>Register</li>

                </ul><!-- breadcrumb Ends -->



            </div>
            <!--- col-md-12 Ends -->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->

                <?php include("includes/sidebar.php"); ?>

            </div><!-- col-md-3 Ends -->

            <div class="col-md-9">
                <!-- col-md-9 Starts -->

                <?php

if(!isset($_SESSION['customer_email'])){

include("customer/customer_login.php");


}else{

include("payment_options.php");

}



?>


            </div><!-- col-md-9 Ends -->


        </div><!-- container Ends -->
    </div><!-- content Ends -->



    <?php

include("includes/footer.php");

?>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>