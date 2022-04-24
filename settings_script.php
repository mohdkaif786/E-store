<?php

// This page updates the user password
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old-password'];
if(strlen($old_pass)>=32){
$old_pass = mysqli_real_escape_string($con, $old_pass);
}
else
{
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);
}

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $new_pass1) {
    $error1="<span class='red'>The two passwords does not match</span>";
    header('location: settings.php?error='.$error1);
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        $query_result=mysqli_query($con, $query) or die(mysqli_error($con));
       $success ="<span class='green'>Password Updated Successfully</span>";
        header('location: settings.php?error='. $success);
    } else
      {
        $error2="<span class='red'>Wrong Old Password</span>";
        header('location: settings.php?error='.$error2);
      }
}
?>