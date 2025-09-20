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
<meta charset="utf-8">
<title>Parent</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<form action="Parent.php" method="post">
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                <div class="col-md-12"><label class="labels">Email :</label><input type="email" class="form-control" name="Email" required></div>
                <div class="col-md-12"><label class="labels">Enrollment_no :</label><input type="number" class="form-control" name="Enrollment_no" required></div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                <a href="https://deptxpert.com/DeptXPert/Student/Student.php" type="button"class="btn btn-danger" >Cancle</a>
                <button type="submit" class="btn btn-primary">View</button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>