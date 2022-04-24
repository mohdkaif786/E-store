<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | E-Store.com</title>
    <link rel="shortcut icon" href="img/user.png" type="image/png">
        
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
    <?php include "includes/header.php"; ?>

      
           
            <div id="banner_image1" >  
              
            
               <div class="container">
           <div class="row">
                 
                <div class="col-sm-5 col-sm-offset-6">
               <div class="panel panel-default"style="margin-top:40px;"  >
               
                 
                 <div class="panel-footer" style="background-color:white;">
                 <div class="panel-body " >  
                 <div >
                <h2 style="color:black;" >SIGN UP</h2>
              </div>
                       <form  action="signup_script.php" method="POST">

                        <div class="form-group col-sm-12">
                            <input class="form-control" placeholder="Name" name="name" required>
                        </div>

                        <div class="form-group col-sm-12">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-12 ">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                        </div>

                        <div class="form-group col-sm-12">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-12" >
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-12" >
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div class="col-sm-12 ">
                         
                   <button type="submit" name="submit" class="btn  btn-md btn-block btn-info">Submit</button>
                          
                        </div>  
                       
                       <div >
                          
                           <center>
                         <p style="color:black;"><br>   Already have an account ?<a href="#" data-toggle="modal" data-target="#loginmodal"> Login</a></p>
                         </center>
                        </div>
                       
                </form>
                 </div>
               </div>  
               </div>  
     
     
    </div>   
   </div>
  </div> 
  </div>  
      <!--Footer-->
      <?php include "includes/footer.php"; ?>
      <!--Footer-->
</body>
</html>
