<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>  
    <link rel="stylesheet" href="forgot-password.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <form action="controllerUserData.php" method="POST" autocomplete="off">
        <?php 
        if(isset($_SESSION['info'])){
            ?>
            <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
            </div>
            <?php
        }
        ?>
        <?php
        if(count($errors) > 0){
            ?>
            <div class="alert alert-danger text-center">
                <?php
                foreach($errors as $showerror){
                    echo $showerror;
                }
                ?>
            </div>
            <?php
        }
        ?>
        <center>
        <i class="bx bxs-check-shield" style="font-size: 10rem;"></i>
        </center>
        <h1>New Password</h1>
        <div class="input-box">
            <label>Create new password :</label>
            <input type="password" name="password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div class="input-box">
            <label>Confirm your password :</label>
            <input type="password" name="cpassword" required>
            <i class='bx bxs-lock-alt'></i>
        </div><br><br>
        <button type="submit" class="btn" name="change-password">Change</button>
    </form>
</div>
</body>
</html>