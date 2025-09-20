<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
    <title>Open File</title>
</head>
<body>
<<div>
  <script>
  document.addEventListener("contextmenu", function (e){
    e.preventDefault();
  }, false);
  </script>
<?php 

    $filename=$_GET['filename'];
    header("Location:uploads/".$filename);
?>
</div>
</body>
</html>