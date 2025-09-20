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
  <title>Students</title>
  <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
 
</head>
<body class="bg-dark">
<div>
    <script>
    document.addEventListener("contextmenu", function (e){
        e.preventDefault();
    }, false);
    </script>
<form action="Update.php" method="post">
    <div class="container rounded bg-white mt-5 mb-3">
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
            <div class="col-md-2 border-right">
                <a href="Studentdata.php" class="btn btn-info profile-button " type="button"><i class="bi bi-arrow-left-circle"></i>&nbsp;&nbsp;Back</a>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">UTI</span><span class="text-black-50">uti@gmail.com</span><span> </span></div>
            </div>
            <div class="col-md-10">
                <div class="p-5 py-10">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Student record Update</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Student ID :</label><input type="number" class="form-control" name="Student_id" required></div>
                        <div class="col-md-6"><label class="labels">Full Name :</label><input type="text" class="form-control" name="Name" required></div>
                    </div>
                    <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Enrollment_no :</label><input type="number" class="form-control"  name="Enrollment_no" maxlength="10" pattern="\d{10}"  required></div>
                        <div class="col-md-6"><label class="labels">Email :</label><input type="email" class="form-control" name="email" required></div>
                        <div class="col-md-6"><label class="labels">Password :</label><input type="password" class="form-control" name="Password" required></div>
                        <div class="col-md-6"><label class="labels">Roll NO :</label><input type="number" class="form-control" name="Roll_no" required></div>
                        <div class="col-md-6"><label class="labels">DOB :</label><input type="date" class="form-control" name="DOB" required></div>
                        <div class="col-md-6"><label class="labels">Sub1</label><input type="number" class="form-control"  name="Sub1" min="0" max="20" required></div>
                        <div class="col-md-6"><label class="labels">Sub2</label><input type="number" class="form-control"  name="Sub2" min="0" max="20" required></div>
                        <div class="col-md-6"><label class="labels">Sub3</label><input type="number" class="form-control"  name="Sub3" min="0" max="20" required></div>
                        <div class="col-md-6"><label class="labels">Sub4</label><input type="number" class="form-control" name="Sub4" min="0" max="20" required></div>
                        <div class="col-md-6"><label class="labels">Sub5</label><input type="number" class="form-control" name="Sub5" min="0" max="20" required></div>
                        <div class="col-md-6 mt-md-3 mt-3">
                            <div class="m-flex align-items-center mt-2">
                            <label>Gender</label>
                                <label class="option">
                                <input type="radio" value="Male" name="Gender" required><label>Male</label>
                                </label>
                                <label class="option ms-4">
                                <input type="radio" value="Female" name="Gender" required><label>Female</label>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6"><label class="labels">Attendance</label><input type="number" class="form-control" name="Attendance" required></div>
                        <div class="col-md-6"><label class="labels">Class :</label>
                            <select class="form-control" name="Class" required>
                                <option value="" name="Class">None</option>
                                <option value="FY-CO" name="Class">FY-CO</option>
                                <option value="SY-CO" name="Class">SY-CO</option>
                                <option value="TY-CO" name="Class">TY-CO</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Record&nbsp;&nbsp;<i class="bi bi-floppy"></i></button></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</form>
</div>
</body>
</html>