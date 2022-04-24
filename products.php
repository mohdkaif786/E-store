<?php
include "includes/common.php";
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Mobile | E-Store</title>
        <link rel="shortcut icon" href="img/home.png" type="image/png">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
    <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
</head>
<style>
#products-jumbotron{
color: green;
background-color: #FFFFCC;
}
</style>
   
<body style="padding-top: 50px;">
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
         include 'includes/modal.php';
        ?>
    <br>
    <br>
    
    <div class="container">
        <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>Welcome to our E-Store</h1>
                <p>We have the best desktops from Biggest Brands for you. No need to hunt around, we have all in one place.</p>
              </center>
            </div>
            <hr>
            <br>
            
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-info">
                    <div class="panel-heading color">
                        <h3 style="color:blue">Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#macos"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#windows"><span style="color:black">DELL</span></a></p>
                           <p><a href="#hp"><span style="color:black">HP</span></a></p>
                            <p><a href="#lenovo"><span style="color:black">LENOVO</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="panel panel-warning">
                    <div class="panel-heading  color">
                        <h3 style="color:blue">Operating System</h3>
                    </div>
                    
                    <div class="panel-body">
                       <div class="rmvb">
                            <p><a href="#windows"><span style="color:black">WINDOWS</span></a></p>
                            <p><a href="#macos"><span style="color:black">MAC-OS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!--------------------------------------BEST SELLING DESKTOPS------------------------------------------------>
                   <div class="panel panel-success">
                        <div class="panel-heading  color">
                            <h3 style="color:blue">BEST SELLING DESKTOPS</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/apple7gen.jpg" alt="Apple Core i5" >
                                    <div class="caption">
                                        <h3>Apple Core i5 (7th Gen) </h3>
                                        <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Mac OS X Sierra</li>
                                           <li>RAM:8 GB</li>
                                             <li>27 Inch Screen</li>
                                             <li>color: Silver</li>
                                           </ul>

                                              <p>Old Price: Rs.<del> 1,91,990.00 </p></del>
                                                <p>New Price: Rs. 1,89,990.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/dell-core-i7.jpeg" alt="Dell Core i7 " style="padding-top:30px;padding-bottom:60px">
                                    <div class="caption">
                                        <h3>Dell Core i7 </h3>
                                                <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Pro</li>
                                           <li>RAM:16 GB DDR4</li>
                                             <li>27 Inch Screen</li>
                                             <li>color: Black</li>
                                           </ul>
                                           <p>Old Price: Rs.<del> 2,52,000.00 </p></del>
                                                <p>New Price: Rs. 2,50,000.00 </p>
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/hp-ryzen.jpeg" alt="HP Ryzen 3 Dual Core" style="padding-top:30px;padding-bottom:40px">
                                <div class="caption">
                                    <h3>HP Ryzen 3 Dual Core </h3>
                                                  <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home</li>
                                           <li>RAM:8 GB DDR4</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color: Jet Black</li>
                                           </ul>
                                              <p>Old Price: Rs.<del> 44,990.00 </p></del>
                                                <p>New Price: Rs. 42,990.00 </p>
                                           
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#"  data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="cart.php" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/lenovo-10gen.jpeg" alt="mi mix 2">
                                <div class="caption">
                                    <h3>Lenovo Core i3 (10th Gen) </h3>
                                          <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home</li>
                                           <li>RAM:8 GB DDR4</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color: Black</li>
                                           </ul>
                                                <p>Old Price: Rs.<del> 48,250.00 </p></del>
                                                <p>New Price: Rs. 46,250.00 </p>
                                           
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------apple----------------------------------->
                <div class="panel panel-info">
                        <div class="panel-heading  color">
                            <h3 id="macos" style="color:blue">apple</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/apple7gen.jpg" alt="Apple Core i5 (7th Gen) " >
                                    <div class="caption">
                                        <h3>Apple Core i5 (7th Gen) </h3>
                                                      <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Mac OS X Sierra</li>
                                           <li>RAM:8 GB DDR4</li>
                                             <li>27 Inch Screen</li>
                                             <li>color: Silver</li>
                                           </ul>
                                                   <p>Old Price: Rs.<del> 1,91,990.00 </p></del>
                                                <p>New Price: Rs. 1,89,990.00 </p>
                                           
                                                  
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/apple-i5-5gen.jpg" alt="Apple Core i5 "style="padding-bottom:25px">
                                    <div class="caption">
                                        <h3>Apple Core i5 </h3>
                                                   <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Mac OS X Mavericks </li>
                                           <li>RAM:8 GB DDR3</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color: Silver</li>
                                           </ul>
                                                   <p>Old Price: Rs.<del> 1,17,000.00 </p></del>
                                                <p>New Price: Rs. 1,15,000.00 </p>
                                           
                                                 
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#"  data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/apple-i5-6gen.jpg" alt="Apple Core i5 (6th Gen)">
                                <div class="caption">
                                    <h3>Apple Core i5 (6th Gen) </h3>
                                                  <ul type="disc">
                                         <li>HDD:2 TB</li>
                                          <li>Mac OS X Lion </li>
                                           <li>RAM:8 GB DDR3</li>
                                             <li>27 Inch Screen</li>
                                             <li>color: Silver</li>
                                           </ul>
                                                   <p>Old Price: Rs.<del> 1,81,990.00 </p></del>
                                                <p>New Price: Rs. 1,79,990.00 </p>
                                           
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/apple-mac-5gen.jpg" alt="Apple Core i5 (5th Gen)">
                                <div class="caption">
                                    <h3>Apple Core i5 (5th Gen) </h3>
                                              
                                                   <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Mac OS X Lion </li>
                                           <li>RAM:8 GB DDR3</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color: Grey</li>
                                           </ul>
                                                    <p>Old Price: Rs.<del> 93,490.00 </p></del>
                                                <p>New Price: Rs. 91,490.00 </p>
                                           
                                                 
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------DELL----------------------------------->
                <div class="panel panel-warning">
                        <div class="panel-heading  color">
                            <h3 id="windows" style="color:blue">DELL</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/dell-core-i7.jpeg" alt="Dell Core i7 " >
                                    <div class="caption">
                                        <h3>Dell Core i7 </h3>
                                                   <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Pro </li>
                                           <li>RAM:16 GB DDR4</li>
                                             <li>27 Inch Screen</li>
                                             <li>color: Silver</li>
                                           </ul>
                                                   <p>Old Price: Rs.<del> 2,52,000.00 </p></del>
                                                <p>New Price: Rs. 2,50,000.00 </p>
                                           
                                                  
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#"  data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/dell-pentium.jpeg" alt="Dell Pentium Quad Core">
                                    <div class="caption">
                                        <h3>Dell Pentium Quad Core</h3>
                                                  <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Pro </li>
                                           <li>RAM:4 GB DDR3</li>
                                             <li>19.5 Inch Screen</li>
                                             <li>color: Black</li>
                                           </ul>
                                                   <p>Old Price: Rs.<del> 30,490.00 </p></del>
                                                <p>New Price: Rs. 28,490.00 </p>
                                           
                                                 
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/dell-ryzen.jpeg" alt="Dell Ryzen 5">
                                <div class="caption">
                                    <h3>Dell Ryzen 5 </h3>
                                                 <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home </li>
                                           <li>RAM:8 GB DDR4</li>
                                             <li>27 Inch Screen</li>
                                             <li>color: Grey</li>
                                           </ul>
                                                        <p>Old Price: Rs.<del> 1,10,990.00 </p></del>
                                                <p>New Price: Rs. 1,08,990.00 </p>
                                           
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#"  data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/dell-core-i3.jpeg" alt="Dell Core i3 (7th Gen) ">
                                <div class="caption">
                                    <h3>Dell Core i3 (7th Gen) </h3>
                                                     <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home </li>
                                           <li>RAM:4 GB DDR4</li>
                                             <li>19.5 Inch Screen</li>
                                             <li>color: Black</li>
                                           </ul>
                                                   <p>Old Price: Rs.<del> 34,390.00 </p></del>
                                                <p>New Price: Rs. 32,390.00 </p>
                                           
                                                 
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------HP----------------------------------->
                <div class="panel panel-info">
                        <div class="panel-heading  color">
                            <h3 id="hp" style="color:blue">HP</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/hp-ryzen.jpeg" alt="HP Ryzen 3 Dual Core" >
                                    <div class="caption">
                                        <h3>HP Ryzen 3 Dual Core </h3>
                                                    <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home </li>
                                           <li>RAM:8 GB DDR4</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color:Jet Black</li>
                                           </ul>
                                                     <p>Old Price: Rs.<del> 44,990.00 </p></del>
                                                <p>New Price: Rs. 42,990.00 </p>
                                           
                                                 
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/hp-core-i5.jpeg" alt="HP Core i5 (9th Gen)">
                                    <div class="caption">
                                        <h3>HP Core i5 (9th Gen) </h3>
                                            <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home </li>
                                           <li>RAM:8 GB DDR4</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color:Jet Black</li>
                                           </ul>
                                               <p>Old Price: Rs.<del> 59,782.00 </p></del>
                                                <p>New Price: Rs. 57,782.00 </p>
                                           
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/hp-pentium.jpeg" alt="HP Pentium Quad Core">
                                <div class="caption">
                                    <h3>HP Pentium Quad Core </h3>
                                                <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home </li>
                                           <li>RAM:4 GB DDR4</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color:Snow White</li>
                                           </ul>
                                                     <p>Old Price: Rs.<del> 36,089.00 </p></del>
                                                <p>New Price: Rs. 34,089.00 </p>
                                           
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/hp-celeron.jpeg" alt="HP celeron">
                                <div class="caption">
                                    <h3>HP Celeron Dual Core </h3>
                                                <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li> Windows 10 Pro</li>
                                           <li>RAM:4 GB DDR4</li>
                                             <li>19.5 Inch Screen</li>
                                             <li>color:Black</li>
                                           </ul>
                                                    <p>Old Price: Rs.<del> 26,990.00 </p></del>
                                                <p>New Price: Rs. 24,990.00 </p>
                                           
                                                   
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------LENOVO----------------------------------->
                   <div class="panel panel-success">
                        <div class="panel-heading  color">
                            <h3 id="lenovo" style="color:blue">LENOVO</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/lenovo-10gen.jpeg" alt="Lenovo Core i3 (10th Gen)" >
                                    <div class="caption">
                                        <h3>Lenovo Core i3 (10th Gen) </h3>
                                        <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home </li>
                                           <li>RAM:8 GB DDR4</li>
                                             <li>19.5 Inch Screen</li>
                                             <li>color:Black</li>
                                           </ul>
                                                <p>Old Price: Rs.<del> 48,250.00 </p></del>
                                                <p>New Price: Rs. 46,250.00 </p>
                                           
                                                 
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/lenovo-dual-core.jpeg" alt="Lenovo Celeron Dual Core" style="padding-top:17px;padding-bottom:20px">
                                    <div class="caption">
                                        <h3>Lenovo Celeron Dual Core </h3>
                                                 <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home</li>
                                           <li>RAM:4 GB DDR4</li>
                                             <li>19.5 Inch Screen</li>
                                             <li>color:Black</li>
                                           </ul>
                                                 <p>Old Price: Rs.<del> 25,999.00 </p></del>
                                                <p>New Price: Rs. 23,999.00 </p>
                                           
                                                
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/lenovo-6gen.jpeg" alt="Lenovo Core i3 (6th Gen) "style="padding-bottom:15px">
                                <div class="caption">
                                    <h3>Lenovo Core i3 (6th Gen) </h3>
                                                    <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Pro </li>
                                           <li>RAM:4 GB DDR4</li>
                                             <li>21.5 Inch Screen</li>
                                             <li>color:Black</li>
                                           </ul>
                                             <p>Old Price: Rs.<del> 35,270.00 </p></del>
                                                <p>New Price: Rs. 33,270.00 </p>
                                           
                                                 
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/lenovo-pentium.jpeg" alt="Lenovo Pentium Quad Core ">
                                <div class="caption">
                                    <h3>Lenovo Pentium Quad Core </h3>
                                                    <ul type="disc">
                                         <li>HDD:1 TB</li>
                                          <li>Windows 10 Home </li>
                                           <li>RAM:4 GB DDR3</li>
                                             <li>19.5 Inch Screen</li>
                                             <li>color:Black</li>
                                           </ul>
                                                     <p>Old Price: Rs.<del> 29,064.00 </p></del>
                                                <p>New Price: Rs. 27,064.00 </p>
                                           
                                                  
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#"  data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
     <!--Footer end-->
</body>
</html>
    
   