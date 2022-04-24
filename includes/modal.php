<? php 
include 'includes/modal.php';
include'common.php';
include 'header.php';
?>
 <html>
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
<body>
<!-- Modal -->
    
               
  <div class="modal fade " id="loginmodal" role="dialog">
    <div class="modal-dialog ">

      <!-- Modal content-->
      <div class="modal-content">
<!-- Modal header-->
        <div class="modal-header">
             
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:orange;" class="color"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
     <!-- Modal header end-->  
        <div class="modal-body">

          <form role="form" action="login_submit.php" method="POST">
            
              <div class="form-group col-md-10  col-md-offset-1">
              <label><span class="glyphicon glyphicon-envelope"></span> E-Mail</label>
              <input type="email" class="form-control" id="inputEmail" name="e-mail" placeholder="Enter your Registered e-mail" required>
            </div>
            <div class="form-group col-md-10  col-md-offset-1">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" placeholder="Enter password" name="password"                required>
           
           </div>
            

           <div >
           <center>
              <button type="submit" class="  btn   btn-info " ><span class="glyphicon glyphicon-off"></span> Login</button>
          <center>
            </div>  
             
</form>           
        </div>              
 
        
          <div class="modal-footer">
           <p style="float:left">Not a member? <a href="signup.php">Sign Up</a></p>
          <p style="float:right"><a href="forget.php">Forgot Password?</a></p>
        </div>
 
 
     
   
 
</div>
  </div> 
  </div>
 </body>
</html>