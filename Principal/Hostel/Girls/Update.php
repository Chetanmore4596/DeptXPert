<?php
  session_start();

  include("connection.php");
  
  $Student_id=$_POST['Student_id'];
  $Name=$_POST['Name'];
  $PaidFee=$_POST['PaidFee'];
  $Gender='Female';
  $Branch=$_POST['Branch'];
  $totalfee=22000;
  $remfee=$totalfee-$PaidFee;
  $sql="UPDATE girls SET id='$Student_id',UName='$Name',Gender='$Gender',Branch='$Branch',Totalfee='$totalfee',Paidfee='$PaidFee',Remainingfee='$remfee' WHERE id='$Student_id'";

  mysqli_query($con,$sql);

  $_SESSION['message']="Record Updated Succesful";
  header("Location:Girls.php");

?>