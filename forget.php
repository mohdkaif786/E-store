<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forget password | E- Store.com</title>
         <link rel="shortcut icon" href="img/home.png" type="image/png">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top: 50px;">
        <?php include 'includes/header.php'; ?>
      <div id="banner_image2" >  
  <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                 
                    
                   <div class="col-md-4 col-md-offset-2"> 
                        <div class="panel panel-primary" style="margin-top:160px" >
                            <div class="panel-heading">
                                <h4>forget password ?</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>enter your registered e-mail id</i><p>
                                <form action="forget_script.php" method="POST">
                                   <div class="form-group">  
                                   
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    
                                   <?php
                                if(isset($_GET["error1"])){
                                  echo $_GET['error1'];
                                }
                                ?>
                               </div>     
                                        

                                    <button type="submit" name="submit" class="btn btn-info">submit</button><br><br>
                                  
                                </form><br/>
                            
                            </div>
                            <div class="panel-footer">
                          <p style="color:black">go to home page <a href="index.php"> click here</a></p>
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
