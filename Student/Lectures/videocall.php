<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectures</title>
    <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
</head>
<body>
    <script>
    function myfun(){
        $video_file_path="https://www.youtube.com/embed/k7ELO356Npo?si=vu5BQlGaoOGtX0QS";
        echo '<iframe width="1470" height="690" controls>';
        echo '<source src="' . $video_file_path . '" type="video/mp4">';
        echo "</iframe>";
    }
    myfun();
    </script>
</body>
</html>