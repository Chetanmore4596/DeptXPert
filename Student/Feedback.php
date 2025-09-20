<?php
  session_start();

  $Name=$_POST['name'];
  $Email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $to_email =$Email;
  $subject = $Name." - ".$subject;
  $body = "Requested By - ".$Email."\n\n".$message;
  $headers = "From: YOUR-EMAIL";
  if (mail($to_email, $subject, $body, $headers)) {
    
    $_SESSION['message']="Yor Feedback is send Succesful..!!";
    header("Location:Student.php");
  } 
  else {

    $_SESSION['message']="Please check your Internet connection..!!";
    header("Location:Student.php");
  }

?>

