<?php
  session_start();

  include("connection.php");

  $Teacher_id=$_POST['Teacher_id'];
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Mobile_no=$_POST['Mobile_no'];
  $DOB=$_POST['DOB'];
  $Gender=$_POST['Gender'];
  $Class=$_POST['Class'];
  $Attendance=$_POST['Attendance'];
  $SUB=$_POST['Sub'];

  $sql="UPDATE teacher SET id='$Teacher_id',UName='$Name',Mobile_no='$Mobile_no',Email='$Email',
  DOB='$DOB',Gender='$Gender',Class='$Class',Attendance='$Attendance',SUB='$SUB' WHERE id='$Teacher_id'";

  mysqli_query($con,$sql);

  $_SESSION['message']="Record Updated Succesful";
  header("Location:teacherdata.php");

?>