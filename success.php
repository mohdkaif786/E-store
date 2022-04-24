<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];
$query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = $item_ids_string  WHERE users_items.user_id='$user_id' and status='Added to cart'";
               
//We will change the status of the items purchased by the user to 'Confirmed'
 $result = mysqli_query($con, $query)or die(mysqli_error($con));          
 if (mysqli_num_rows($result) >= 1) {
                          
while ($row = mysqli_fetch_array($result)) {
 $item_ids_string = $row["id"] ;    
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=' $user_id ' AND item_id = ' $item_ids_string  'and status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
                     
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success | Life Style Store</title>
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
<style>
#jumbostyle{
color: black;
background-color:rgba(154, 219, 6,0.6) ;
}

</style>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container" id="content">
            <div class="col-md-12 ">
                
                    <div class="jumbotron" id="jumbostyle"style="margin-top:120px">

                      <h3 align="center"> Thank you for ordering from E-store. The order shall be delivered to you shortly.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase more electronic items.</p>
                
              </div>
            </div>
        </div>
          <!--Footer-->
        <?php include("includes/footer.php");
        ?>
           <!--Footer end-->
  </body>
</html>
