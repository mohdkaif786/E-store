<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | E-Store.com</title>
<link rel="shortcut icon" href="img/home.png" type="image/png">
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online personal computer Store</h1>
                            <h4><p>Flat &nbsp;&#8377;2,000&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                   
                    <div class="panel panel-info">
                        <div class="panel-heading  color ">
                            <h3 style="color:blue">Choose  From  wide range  of  brands</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#macos">
                               <div class="thumbnail">
                                    <img src="./img/apple7gen.jpg" alt="Apple" style="padding-top:2px">
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#windows">
                               <div class="thumbnail">
                                    <img src="./img/dell.jpeg" alt="DELL" style="padding-right:20px;padding-top:20px">
                                        <div class="caption">
                                            <h3>DELL</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#hp">
                               <div class="thumbnail">
                                    <img src="./img/hp.jpg" alt="HP" style="padding-top:52px;padding-bottom:5px">
                                        <div class="caption">
                                            <h3>HP</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#lenovo">
                               <div class="thumbnail">
                                    <img src="./img/lenovo-10gen.jpeg" alt="lenovo" style="padding-top:40px">
                                        <div class="caption">
                                            <h3>Lenovo</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 


                </div>
            </div>

            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
