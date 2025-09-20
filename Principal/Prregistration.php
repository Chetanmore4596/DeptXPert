<?php
  session_start();
  include("connection.php");

  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $encpass = md5($Password);
  $Mobile_no=$_POST['Mobile_no'];
  $Gender=$_POST['Gender'];
  $sql="SELECT * FROM principal WHERE Email='$Email'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count==0)
  {
    $sql="INSERT INTO principal (UName,Email,UPassword,Mobile_No,Gender) VALUES ('$Name','$Email','$encpass','$Mobile_no','$Gender')";
    mysqli_query($con,$sql);
    $to_Email = $Email;
    $subject = "DeptXPert | Registration Account";
    $body = "Hi, ".$Name." You are Account is created with ".$to_Email." on DeptXpert.com successfully..!!";
    $headers = "From: YOUR-EMAIL";
    if(mail($to_Email, $subject, $body, $headers))
    {
      $_SESSION['message']="Registration Succesful";
      header("Location:Prinregister.php");
    }
    else
    {
      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:Prinregister.php");
    }
  }
  else
  {
    $to_Email = $Email;
    $subject = "DeptXPert Mailler to my user";
    $body = "Hi, ".$Name." You are Account is Already exist with".$to_Email."on DeptXpert.com..!!";
    $headers = "From: YOUR-EMAIL";
    mail($to_Email, $subject, $body, $headers);
    
    $_SESSION['message']="Alredy exist Account is Already exist";
    header("Location:Principal.php");
  }


?>
