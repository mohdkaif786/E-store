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
<body>
<?php

require("includes/common.php");
include'includes/modal.php';


$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];

if(strlen($password)>=32){
$password = mysqli_real_escape_string($con, $password);
}
else
{
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
}

// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {

?>

<?php include "includes/header.php"; ?>
<div class="container">
<div class="col-lg-8 col-sm-offset-2">
<div class="jumbotron" id="jumbostyle" style="margin-top:90px;margin-bottom:180px">

                      <div>
                     <h3  align="center" style="color:red">Please enter correct E-mail id and Password</h3>
                    <br>
                    <h3  align="center">Click <a href= "#" data-toggle="modal" data-target="#loginmodal">here</a> to visit login page.</h3>
                
              </div>
</div>
</div>
</div>
<?php
include'includes/footer.php';
?>
<?php
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');

}
?>
</body>
</html>


