<?php
  session_start();
  include("connection.php");

  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $encpass=md5($Password);
  $sql="SELECT * FROM teacher WHERE Email='$Email' AND UPassword='$encpass'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    $to_email = $Email;
    $subject = "DeptXPert Mailler to";
    $body = "Hi, ".$to_email." You are Loged in DeptXpert.com successfully..!!";
    $headers = "From: YOUR-EMAIL";
    if (mail($to_email, $subject, $body, $headers)) {

      $_SESSION['Email'] = $Email;
      header("Location:teacher.php");
    } 
    else {

      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:teacherlogin.php");
    }
    
  }
  else
  {
    $to_email = $Email;
    $subject = "DeptXPert Mailler to my user";
    $body = "Hi, ".$to_email." Some one trying to login DeptXpert.com with your email Please check it..!!";
    $headers = "From: YOUR-EMAIL";
    if (mail($to_email, $subject, $body, $headers)) {
      
      $_SESSION['error']="Wrong Email or password.!!";
      header("Location:teacherlogin.php");
    } 
    else {

      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:teacherlogin.php");
    }
    
  }
  
?>
