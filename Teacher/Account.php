<?php session_start();?>
<?php 
    $Email = $_SESSION['Email'];
    if(!isset($Email))
    {
        header("Location:https://deptxpert.com/deptxpert/Teacher/teacherlogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
  <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
 
</head>
<body class="bg-dark">
<?php 
    include("connection.php");
    
    $Email = $_SESSION['Email'];
    $sql="SELECT * FROM teacher WHERE Email='$Email'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div>
        <script>
        document.addEventListener("contextmenu", function (e){
            e.preventDefault();
        }, false);
        </script>
    <div class="container rounded bg-white mt-3 mb-3 col-5">
    <?php
        if(isset($_SESSION['message']))
        {?>
            <script>
            swal({
                title: "Done!",
                text: "<?php echo $_SESSION['message'];?>",
                icon: "success",
                });
            </script>

        <?php }
            unset($_SESSION['message']);
        ?>
        <div class="row">
            <div class="col-md-12 border-right">
                <a href="https://deptxpert.com/DeptXPert/Teacher/Teacher.php" class="btn btn-info profile-button " type="button"><i class="bi bi-arrow-left-circle"></i>&nbsp;&nbsp;Back</a>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-10" width="170px" 
                src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?php echo $row['UName']; ?></span></div>
            </div>
            <div class="col-md-12">
                <div class="p-5 py-12">
                    <div class="row mt-6">
                        <div class="col-md-6" style="width:100%;"><label class="labels">Full Name :</label><input type="text" readonly="true" class="form-control" value="<?php echo $row['UName']; ?>" required></div>
                        <div class="col-md-6" style="width:100%;"><label class="labels">Email :</label><input type="email" readonly="true" class="form-control" value="<?php echo $row['Email']; ?>" required></div>
                        <div class="col-md-6" style="width:100%;"><label class="labels">Gender :</label><input type="text" readonly="true" class="form-control" value="<?php echo $row['Gender']; ?>" required></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>