<?php session_start();?>
<?php 
    $Email = $_SESSION['Email'];
    if(!isset($Email))
    {
        header("Location:https://deptxpert.com/deptxpert/Principal/principalogin.php");
    }
?>
<!DOCTYPE html>
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
<body class="bg-dark">
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
              <a href="https://deptxpert.com/DeptXPert/Principal/Hostel/Boys/Boys.php" class="btn btn-info profile-button " type="button"><i class="bi bi-arrow-left-circle"></i>&nbsp;&nbsp;Back</a>
                <h2 class="display-6 text-center">All Students Display</h2>
                <?php
                if(isset($_SESSION['message']))
                {?>
                    <div class="alert alert-success">
                    <strong><?php echo $_SESSION['message'];?></strong>
                    </div>
                    
                <?php }
                    unset($_SESSION['message']);
                ?>
              </div>
              <form action="Search.php" method="post" class="form-inline my-2" alt="Max-width 100%" >
              <div class="mx-auto bg-info" style="width:99%;">&nbsp;&nbsp;
                        <input type="text" class="form-control" name="searchvalue" placeholder="Search Record">&nbsp;&nbsp;
                        <button class="btn btn-warning my-3" type="submit">Search&nbsp;&nbsp;<i class="bi bi-search"></i></button>
                        <a href="data_insert.php"class="btn btn-warning my-3" type="button">ADD&nbsp;&nbsp;<i class="bi bi-plus-circle"></i></a>
                </form>
                <div class="card-body bg-info">
                    <table class="table table-bordered text-center text-white">
                        <tr class="bg-dark text-white">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Gender</td>
                            <td>Branch</td>
                            <td>Total Fee</td>
                            <td>Paid Fee</td>
                            <td>Remaining Fee</td>
                            <td>Register Date</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <tbody>
                        <?php 
                                include("connection.php");
                                $sql="SELECT * FROM girls ORDER BY id ASC";
                                $result=mysqli_query($con,$sql);
                                if ($result->num_rows > 0) {
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['UName']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['Branch']; ?></td>
                                    <td><?php echo $row['Totalfee']; ?></td>
                                    <td><?php echo $row['Paidfee']; ?></td>
                                    <td><?php echo $row['Remainingfee']; ?></td>
                                    <td><?php echo $row['Register_Date']; ?></td>
                                    <td><a href="Data_Update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit&nbsp;&nbsp;<i class="bi bi-pencil-square"></i></a></td>  
                                    <td><a href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" onclick="return confirm('Do you want Delete this record ?');">Delete&nbsp;&nbsp;<i class="bi bi-trash3"></i></a></td> 
                                    </tr>
                                    <?php    
                                    }   
                                
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="18">No files uploaded yet.</td>
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