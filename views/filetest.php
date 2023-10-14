<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="filetest.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>


<?php
if(isset($_POST["submit"])) {
    $file = $_FILES["image"];
    
    $filename = $file["name"];      // Original file name
    $tempname = $file["tmp_name"];  // Temporary file name
    $folder = "images/".$filename;  // Destination folder

    if (move_uploaded_file($tempname, $folder)) {
        echo "File uploaded successfully to: " . $folder;
    } else {
        echo "Error uploading the file.";
    }

    echo __DIR__ . '/../assets/imgs/sita.jpeg';
}
?>


