
<?php
	

    $name       = @trim(stripslashes($_POST['name']));
    $email      = @trim(stripslashes($_POST['email']));
    $message    = @trim(stripslashes($_POST['message']));

    $email_from = $email;
    $email_to = 'lv102785@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
     if( $success == true ) {
           
            $success = "<span class='green'>Message sent successfully...</span>";
             header('location: contact_us.php?error2=' . $success);
         }else {
                $errormsg = "<span class='red'>Message could not be sent...</span>";
             header('location: contact_us.php?error2=' . $errormsg);
            
         }
    
?>