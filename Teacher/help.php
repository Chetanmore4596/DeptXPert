<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "principal";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  $Email="YOUR-EMAIL-DEVLOPER ONLY ONE";
  $userEmail=$_POST['Email'];
  $Name=$_POST['name'];
  $message=$_POST['message'];
  $subject=$_POST['subject'];

  $to_email = $Email;
  $to_subject = $Name." - ".$subject;
  $body = "Requested By - ".$userEmail."\n\n".$message;
  $headers = "From: YOUR-EMAIL";
  if(mail($to_email, $to_subject, $body, $headers))
  {
    $_SESSION['message']="Registration Succesful";
    header("Location:Teacher.php");
  }
  else
  {
    $_SESSION['error']="Please check your Internet connection..!!";
    header("Location:Teacher.php");
  }

?>