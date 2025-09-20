<?php
session_start();

    $to_email = $_GET['Email'];
    $subject = "DeptXPert | Logout Account";
    $body = "Hi, ".$to_email." You are DeptXpert.com Account is Logout successfully..!!";
    $headers = "From: YOUR-EMAIL";
    if (mail($to_email, $subject, $body, $headers)) {

      header("Location:https://deptxpert.com/deptxpert");
      exit();
    } 
    else {

      $_SESSION['message']="Please check your Internet connection..!!";
      header("Location:Boys/Boys.php");
    }

?>