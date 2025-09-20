<?php
    session_start();
    
    include("connection.php");
    $id=$_GET['id'];
    $sql= "DELETE FROM boys WHERE id='$id'";
    mysqli_query($con,$sql);
    
    $sql="ALTER TABLE boys AUTO_INCREMENT=1";
    mysqli_query($con,$sql);
    
    $_SESSION['message']="Deleted Succesful";
    header("Location:Boys.php");
  
?>