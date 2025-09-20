<?php
  session_start();
  include("connection.php");
  
  $Name=$_POST['Name'];
  $PaidFee=$_POST['PaidFee'];
  $Gender='Male';
  $Branch=$_POST['Branch'];
  $totalfee=22000;
  $remfee=$totalfee-$PaidFee;
  $sql="SELECT * FROM boys WHERE UName='$Name'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  if($count==0)
  {
      $sql="INSERT INTO boys(UName,Gender,Branch,Totalfee,Paidfee,Remainingfee) VALUES ('$Name','$Gender',
      '$Branch','$totalfee','$PaidFee','$remfee')";
      mysqli_query($con,$sql);
      $_SESSION['message']="Record inserted Succesful";
      header("Location:data_insert.php");
  }
  else
  {
    $_SESSION['error']="Record Alredy Inserted";
    header("Location:data_insert.php");
  }


?>
