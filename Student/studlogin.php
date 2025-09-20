<?php
  session_start();
  include("connection.php");

  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $encpass=md5($Password);
  $sql="SELECT * FROM student WHERE Email='$Email' AND UPassword='$encpass'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    $row=mysqli_fetch_assoc($result);
    $to_email = $Email;
    $subject = "DeptXPert | Login Account";
    $body = "Hi, ".$to_email." You are Loged in DeptXpert.com successfully..!!";
    $headers = "From: deptxpert2024@gmail.com";
    if (mail($to_email, $subject, $body, $headers)) {

      $_SESSION['Email'] = $Email;
      $_SESSION['UID']=$row['id'];
      header("Location:Student.php");
      exit();
    } 
    else {

      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:Studentlogin.php");
    }
    
  }
  else
  {
    $to_email = $Email;
    $subject = "DeptXPert | Login Account";
    $body = "Hi, ".$to_email." Some one trying to login DeptXpert.com with your email Please check it..!!";
    $headers = "From: deptxpert2024@gmail.com";
    if (mail($to_email, $subject, $body, $headers)) {
      
      $_SESSION['error']="Wrong Email or password.!!";
      header("Location:Studentlogin.php");
    } 
    else {

      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:Studentlogin.php");
    }
    
  }
  
?>
