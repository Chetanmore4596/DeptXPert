<!DOCTYPE html>
<?php session_start();?>
<?php 
    $Email = $_SESSION['Email'];
    if(!isset($Email))
    {
        header("Location:https://deptxpert.com/deptxpert/Student/Studentlogin.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Student Data</title>
</head>
<body>
<div>
  <script>
  document.addEventListener("contextmenu", function (e){
    e.preventDefault();
  }, false);
  </script>
    <div class="mw-100" alt="Max-width 100%">
        <div class="row mt-5">
          <div class="col">
            <div class="card mt-5">
              <div class="card-header bg-warning">
              <a href="https://deptxpert.com/DeptXPert/Student/Student.php" class="btn btn-info profile-button " type="button"><i class="bi bi-arrow-left-circle"></i>&nbsp;&nbsp;Back</a>
                <h2 class="display-6 text-center">Student Data</h2>
              </div>
                <div class="card-body bg-info">
                    <table class="table table-bordered text-center text-white">
                        <tr class="bg-dark text-white">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Enrollment_no</td>
                            <td>Roll_no</td>
                            <td>Gender</td>
                            <td>Class</td>
                            <td>AJP</td>
                            <td>CSS</td>
                            <td>OSY</td>
                            <td>STE</td>
                            <td>EST</td>
                            <td>Total</td>
                            <td>Persentage</td>
                            <td>Attendance</td>
                        </tr>
                        <tbody>
                            <?php 
                                include("teachconnection.php");
                                $Email=$_POST['Email'];
                                $Enrollment_no=$_POST['Enrollment_no'];
                                $sql="SELECT * FROM student WHERE Email='$Email' AND Enrollment_no='$Enrollment_no'";
                                $result=mysqli_query($con,$sql);
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['UName']; ?></td>
                                    <td><?php echo $row['Enrollment_no']; ?></td>
                                    <td><?php echo $row['Roll_no']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['Class']; ?></td>
                                    <td><?php echo $row['SUB1']; ?></td>
                                    <td><?php echo $row['SUB2']; ?></td>
                                    <td><?php echo $row['SUB3']; ?></td>
                                    <td><?php echo $row['SUB4']; ?></td>
                                    <td><?php echo $row['SUB5']; ?></td>
                                    <td><?php echo $row['Total']; ?></td>
                                    <td><?php echo $row['Persantage'];?></td>
                                    <td><?php echo $row['Attendance']; ?></td>
                                    </tr>
                                    <?php    
                                    }   
                                
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="18">Not found Sir/Mam</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>