<?php
if(session_start()=== PHP_SESSION_NONE)
{
session_start();
}


    require './email/function.php';
    require './email/smtp/PHPMailerAutoload.php';
    $email=$_SESSION['email12'];
    $subject="you get otp  for forgot password in eyecast.";
    $o= rand(111111,999999);
    $_SESSION['otp']=$o;
    if(send_email($email, $o, $subject))
    {
         echo "<script> window.location.replace('otp.php'); </script>";
    }
    
?>
