<?php
require_once('dbconnect.php');

require('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST) & !empty($_POST)){
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $sql = "SELECT * FROM `project` WHERE email = '$email'";
  $res = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($res);
  if($count == 1){
    $r = mysqli_fetch_assoc($res);
    $password = $r['password'];
    $to = $r['email'];
    $subject = "Your Recovered Password";
    $message = "Please use this password to login " . $password;
    $headers = "From : admin@phpflow.com";
    if(mail($to, $subject, $message, $headers)){
      echo "Your Password has been sent to your email id";
    }else{
      echo "Failed to Recover your password, try again";
    }
  }else{
    echo "Email does not exist in database";
  }
}
