<?php
  session_start();
  include("connection.php");

  $Name=$_POST['Name'];
  $Mobile_no=$_POST['Mobile_no'];
  $Email=$_POST['Email'];
  $DOB=$_POST['DOB'];
  $Gender=$_POST['Gender'];
  $Class=$_POST['Class'];
  $Password=$_POST['Password'];
  $encpass = md5($Password);
  $code=0;
  $Attendance=$_POST['Attendance'];
  $SUB=$_POST['Sub'];
  $sql="SELECT * FROM teacher WHERE Mobile_No='$Mobile_no' AND Email='$Email' ";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count==0)
  {
    $sql="INSERT INTO teacher(UName,Mobile_No,Email,UPassword,DOB,Gender,
    Class,Attendance,SUB,code) VALUES ('$Name','$Mobile_no','$Email','$encpass',
    '$DOB','$Gender','$Class','$Attendance','$SUB','$code')";
    mysqli_query($con,$sql);
    $_SESSION['message']="Record inserted Succesful";
    header("Location:Teacher_data_insert.php");
  }
  else
  {
    $_SESSION['error']="Record Alredy Inserted";
    header("Location:Teacher_data_insert.php");
  }


?>
