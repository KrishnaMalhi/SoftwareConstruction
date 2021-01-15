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

                <div class="box">
                    <!-- box Starts -->

                    <div class="box-header">
                        <!-- box-header Starts -->

                        <center>
                            <!-- center Starts -->

                            <h2> Register A New Account </h2>



                        </center><!-- center Ends -->

                    </div><!-- box-header Ends -->

                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                        <!-- form Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Customer Name</label>

                            <input type="text" class="form-control" name="c_name" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Email</label>

                            <input type="text" class="form-control" name="c_email" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Password </label>

                            <input type="password" class="form-control" name="c_pass" required>

                        </div><!-- form-group Ends -->


                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Country </label>

                            <input type="text" class="form-control" name="c_country" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer City </label>

                            <input type="text" class="form-control" name="c_city" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Contact </label>

                            <input type="text" class="form-control" name="c_contact" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Address </label>

                            <input type="text" class="form-control" name="c_address" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Image </label>

                            <input type="file" class="form-control" name="c_image" required>

                        </div><!-- form-group Ends -->


                        <div class="text-center">
                            <!-- text-center Starts -->

                            <button type="submit" name="register" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Register

                            </button>

                        </div><!-- text-center Ends -->

                    </form><!-- form Ends -->

                </div><!-- box Ends -->

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

<?php

if(isset($_POST['register'])){

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_pass = $_POST['c_pass'];

$c_country = $_POST['c_country'];

$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

$c_ip = getRealUserIp(); 

move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";


$run_customer = mysqli_query($con,$insert_customer);

$sel_cart = "select * from cart where ip_add='$c_ip'";

$run_cart = mysqli_query($con,$sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_cart>0){

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}else{

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('index.php','_self')</script>";


}




}

?>