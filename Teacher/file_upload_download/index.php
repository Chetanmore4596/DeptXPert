<?php session_start();?>
<?php 
    $Email = $_SESSION['Email'];
    if(!isset($Email))
    {
        header("Location:https://deptxpert.com/deptxpert/Teacher/teacherlogin.php");
    }
?>
<?php
    //database connection details

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "fileuploaddownload";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

    //Fetch the uploaded files from the database

    $sql = "SELECT *FROM files";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                <a href="https://deptxpert.com/DeptXPert/Teacher/Teacher.php" class="btn btn-info profile-button " type="button"><i class="bi bi-arrow-left-circle"></i>&nbsp;&nbsp;Back</a>
                <h2 class="display-6 text-center">All Students Display</h2>
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
                unset($_SESSION['message']);
                if(isset($_SESSION['error']))
                {?>
                    <script>
                    swal({
                        title: "Oops!",
                        text: "<?php echo $_SESSION['error'];?>",
                        icon: "error",
                        });
                    </script>
                <?php }
                    unset($_SESSION['error']);
                ?>
              </div>
                <form action="upload.php" method="POST" enctype="multipart/form-data" class="form-inline my-2" alt="Max-width 100%" >
                    <div class="mx-auto bg-info" style="width:99%;">&nbsp;&nbsp;
                    <input type="file" class="form-control" name="file" id = "file">
                    <button class="btn btn-warning my-3 my-sm-2" type="submit">Upload file&nbsp;&nbsp;<i class="bi bi-upload"></i></button>
                </form>
                <div class="card-body bg-info">
                    <table class="table table-bordered text-center text-white">
                        <tr class="bg-dark text-white">
                            <th>File ID</th>
                            <th>File Name</th>
                            <th>File Size</th>
                            <th>File Type</th>
                            <th>View</th>
                            <th>Download</th>
                            <th>Delete</th>
                        </tr>
                        <tbody>
                        <?php
                            // Display the uploaded files and download links
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $file_path = "uploads/" . $row['filename'];
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['filename']; ?></td>
                                        <td><?php echo $row['filesize']; ?> bytes</td>
                                        <td><?php echo $row['filetype']; ?></td>
                                        <td><a href="Open.php?filename=<?php echo $row['filename']; ?>" class="btn btn-warning">View&nbsp;&nbsp;<i class="bi bi-eye"></i></a></td>
                                        <td><a href="<?php echo $file_path; ?>" class="btn btn-warning" download>download&nbsp;&nbsp;<i class="bi bi-download"></i></a></td>
                                        <td><a href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" onclick="return confirm('Do you want Delete this record ?');">Delete&nbsp;&nbsp;<i class="bi bi-trash3"></i></a>
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