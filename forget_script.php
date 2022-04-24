
<?php
    require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: Products.php');
}
?>
  <html lang="en">
    <head>
        <title>Forget password | E-Store.com</title>
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
<?php  
    $email = $_POST['e-mail'];
    $email = mysqli_real_escape_string($con, $email);

    
    $query = "SELECT * FROM users WHERE email='$email'";
  
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $num_rows = mysqli_num_rows($result);
// If the email is not present in the database, the mysqli_num_rows returns 0, it is assigned to$num_rows.
if ($num_rows == 0) {
  $errormsg = "<span class='red'>Please enter correct E-mail id</span>";
  header('location: forget.php?error1=' . $errormsg);
} else {  
  $row = mysqli_fetch_array($result);
   $password= $row['password'];

    $name=$row['name'];
    $email2=$row['email']; 
    $name=$row['name'];
   $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email2 . "\n\n" . 'password: ' .        $password;
   $email_to = $email2;
    $subject="retrive password";
    $email_from = 'samalphasid@gmail.com';
    $success = mail('to: <'.$email_to.'>', $subject, $body, $email_from);
    if( $success == true ) {
           
            $success = "<span class='green'>Password sent to your mail successfully...</span>";
             header('location: forget.php?error1=' . $success);
         }else {
                $errormsg = "<span class='red'>Message could not be sent...</span>";
             header('location: forget.php?error1=' . $errormsg);
            
         }
 }   
?>
</body>
</html>
