<?php
  session_start();
  include("connection.php");
  
  $Name=$_POST['Name'];
  $Enrollment_no=$_POST['Enrollment_no'];
  $Email=$_POST['email'];
  $Password=$_POST['Password'];
  $encpass = md5($Password);
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
  $Test=$_POST['Test'];
  $Attendance=$_POST['Attendance'];
  $total=$Sub_1+$Sub_2+$Sub_3+$Sub_4+$Sub_5;
  $Persantage=($total/100)*100;
  $sql="SELECT * FROM student WHERE Enrollment_no='$Enrollment_no'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count==0)
  {
    $sql="INSERT INTO student(UName,Enrollment_no,Email,UPassword,Roll_no,DOB,Gender,
    Class,SUB1,SUB2,SUB3,SUB4,SUB5,Test,Total,Persantage,Attendance,code) VALUES ('$Name','$Enrollment_no',
    '$Email','$encpass','$Roll_no','$DOB','$Gender','$Class','$Sub_1','$Sub_2','$Sub_3','$Sub_4','$Sub_5','$Test','$total','$Persantage','$Attendance','$code')";
    mysqli_query($con,$sql);
    $to_Email = $Email;
    $subject = "DeptXPert | Registration Account";
    $body = "Hi, ".$Name." You are Account is created with ".$to_Email." on DeptXpert.com successfully..!!";
    $headers = "From: deptxpert2024@gmail.com";
    if(mail($to_Email, $subject, $body, $headers))
    {
      $_SESSION['message']="Student Registration Succesful";
      header("Location:Student_data_insert.php");
    }
    else
    {
      $_SESSION['error']="Please check your Internet connection..!!";
      header("Location:Prinregister.php");
    }
  }
  else
  {
    $_SESSION['error']="Data Alredy Registrator";
    header("Location:Student_data_insert.php");
  }


?>
