<?php
  session_start();
  include("connection.php");

  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $encpass=md5($Password);
  $sql="SELECT * FROM principal WHERE Email='$Email' AND UPassword='$encpass'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    if($Email=='COLLEGE-PRINCIPLE-EMAIL')
    {
      $to_email = $Email;
      $subject = "DeptXPert | Login Account";
      $body = "Hi, ".$to_email." You are Loged in DeptXpert.com successfully..!!";
      $headers = "From: YOUR-EMAIL";
      if (mail($to_email, $subject, $body, $headers)) {
        header("Location:https://deptxpert.com/deptxpert/Principal/Hostel/Boys/Boys.php");
        exit();
      } 
      else {

        $_SESSION['error']="Please check your Internet connection..!!";
        header("Location:principalogin.php");
      }
    }
    else{
    $to_email = $Email;
    $subject = "DeptXPert | Login Account";
    $body = "Hi, ".$to_email." You are Loged in DeptXpert.com successfully..!!";
    $headers = "From:YOUR-EMAIL";
    if (mail($to_email, $subject, $body, $headers)) {

      $_SESSION['Email'] = $Email;
      header("Location:Principal.php");
      exit();
    } 
    else {

      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:principalogin.php");
    }
    
  }
}
  else
  {
    $to_email = $Email;
    $subject = "DeptXPert | Login Account";
    $body = "Hi, ".$to_email." Some one trying to login DeptXpert.com with your email Please check it..!!";
    $headers = "From:YOUR-EMAIL";
    if (mail($to_email, $subject, $body, $headers)) {
      
      $_SESSION['error']="Wrong Email or password.!!";
      header("Location:principalogin.php");
    } 
    else {

      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:principalogin.php");
    }
    
  }
  
?>
