<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot-password.css">
    <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <form action="" method="POST" autocomplete="">
    <?php
        if(count($errors) > 0){
            ?>
            <div class="alert alert-danger text-center">
                <?php 
                    foreach($errors as $error){
                        echo $error;
                    }
                ?>
            </div>
            <?php
        }
    ?>
    <center>
    <i class="bx bxs-check-shield" style="font-size: 10rem;"></i>
    </center>
    <h2 class="text-center">Forgot Password</h2>
    <div class="input-box">
            <label>Email :</label>
            <input type="email" name="email" required value="<?php echo $email ?>">
            <i class='bx bxs-envelope'></i>
            </div><br><br>
        <button class="btn" type="submit" name="check-email">Continue</button>
    </form>
</div>
</body>
</html>