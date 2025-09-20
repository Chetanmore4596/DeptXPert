<?php
  session_start();

  include("connection.php");
  
  $Student_id=$_POST['Student_id'];
  $Name=$_POST['Name'];
  $Enrollment_no=$_POST['Enrollment_no'];
  $Email=$_POST['email'];
  $Password=$_POST['Password'];
  $encpass=md5($Password);
  $Roll_no=$_POST['Roll_no'];
  $DOB=$_POST['DOB'];
  $code=0;
  $Gender=$_POST['Gender'];
  $Class=$_POST['Class'];
  $Sub_1=$_POST['Sub1'];
  $Sub_2=$_POST['Sub2'];
  $Sub_3=$_POST['Sub3'];
  $Sub_4=$_POST['Sub4'];
  $Sub_5=$_POST['Sub5'];
  $Attendance=$_POST['Attendance'];
  $total=$Sub_1+$Sub_2+$Sub_3+$Sub_4+$Sub_5;
  $Persantage=($total/100)*100;

  $sql="UPDATE student SET id='$Student_id',UName='$Name',Enrollment_no='$Enrollment_no',
  Email='$Email',UPassword='$encpass',Roll_no='$Roll_no',Gender='$Gender',DOB='$DOB',
  Class='$Class',SUB1='$Sub_1',SUB2='$Sub_2',SUB3='$Sub_3'
  ,SUB4='$Sub_4',SUB5='$Sub_5',Total='$total',Persantage='$Persantage',Attendance='$Attendance',code='$code' WHERE id='$Student_id'";

  mysqli_query($con,$sql);

  $_SESSION['message']="Record Updated Succesful";
  header("Location:Studentdata.php");

?>