<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="principalogin.css" rel="stylesheet">
  <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
  <?php
      if(isset($_SESSION['message']))
      {?>
        <script>
          swal({
              title: "Thanks!",
              text: "<?php echo $_SESSION['message'];?>",
              icon: "success",
            });
        </script>
    <?php
      }
      if(isset($_SESSION['error']))
      {?>
        <script>
          swal({
              title: "Oops!",
              text: "<?php echo $_SESSION['error'];?>",
              icon: "error",
            });
        </script>
    <?php
      }
      session_destroy();
    ?>
    <form action="prlogin.php" method="post">
    <center>
    <ion-icon name="person-circle-outline" style="font-size: 10em;"></ion-icon>
    </center>
      <h1>Login</h1>
      <div class="input-box">
        <label>Email:</label>
        <input type="Email" name="Email" required>
        <i class='bx bxs-envelope'></i>
        </div>
      <div class="input-box">
        <label>Password:</label>
        <input type="password" name="Password" required>
        <i class='bx bxs-lock-alt' ></i>
        </div><br>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="forgot-password.php">Forgot Password</a>
      </div><br><br>
      <button type="submit" class="btn">Login</button>
      </div>
    </form>
  </div>
</body>
</html>

