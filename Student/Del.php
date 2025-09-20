<?php
    session_start();
    
    include("connection.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM student WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    
    $to_email = $row['Email'];
    $subject = "DeptXPert | Delete Account";
    $body = "Hi, ".$row['UName']." You are DeptXpert.com Account is permanently Deleted Successful..!!";
    $headers = "From: YOUR-EMAIL";
    if (mail($to_email, $subject, $body, $headers)) {

      $sql= "DELETE FROM student WHERE id='$id'";
      mysqli_query($con,$sql);

      $sql="ALTER TABLE student AUTO_INCREMENT=1";
      mysqli_query($con,$sql);
    
      $_SESSION['message']="Account is Deleted Successful";
      header("Location:Studentlogin.php");
    } 
    else {

      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:Student.php");
    }
    
?>