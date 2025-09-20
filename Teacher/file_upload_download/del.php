<?php
    session_start();
    //database connection details

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "fileuploaddownload";

    $con = new mysqli($db_host, $db_user, $db_pass, $db_name);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

    $id=$_GET['id'];
    $sql= "DELETE FROM files WHERE id='$id'";
    mysqli_query($con,$sql);
    
    $sql="ALTER TABLE files AUTO_INCREMENT=1";
    mysqli_query($con,$sql);
    
    $_SESSION['message']="Deleted Succesful";
    header("Location:index.php");
  
?>