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

                    <li>Contact Us</li>

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

                            <h2>Contact Us </h2>

                            <p class="text-muted">
                                If you have any questions, please feel free to contact us, our customer service center
                                is working for you 24/7.

                            </p>

                        </center><!-- center Ends -->

                    </div><!-- box-header Ends -->

                    <form action="contact.php" method="post">
                        <!-- form Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Name</label>

                            <input type="text" class="form-control" name="name" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Email</label>

                            <input type="text" class="form-control" name="email" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Subject </label>

                            <input type="text" class="form-control" name="subject" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Message </label>

                            <textarea class="form-control" name="message"> </textarea>

                        </div><!-- form-group Ends -->

                        <div class="text-center">
                            <!-- text-center Starts -->

                            <button type="submit" name="submit" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Send Message

                            </button>

                        </div><!-- text-center Ends -->

                    </form><!-- form Ends -->

                    <?php

                    if(isset($_POST['submit'])){

                    // Admin receives email through this code

                    $sender_name = $_POST['name'];

                    $sender_email = $_POST['email'];

                    $sender_subject = $_POST['subject'];

                    $sender_message = $_POST['message'];

                    $receiver_email = "sad.ahmed22224@gmail.com";

                    mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

                    // Send email to sender through this code

                    $email = $_POST['email'];

                    $subject = "Welcome to my website";

                    $msg = "I shall get you soon, thanks for sending us email";

                    $from = "sad.ahmed22224@gmail.com";

                    mail($email,$subject,$msg,$from);

                    echo "<h2 align='center'>Your message has been sent successfully</h2>";

                    }


                    ?>

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