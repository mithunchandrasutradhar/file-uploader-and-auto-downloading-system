<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "files/";

    if (empty($_FILES["fileToUpload"]["name"])) {
        echo "Error: File is empty";
    } else {
        $originalFileName = basename($_FILES["fileToUpload"]["name"]);
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

        // Generate a unique filename
        $filename = "turfsport." . $fileExtension;
        $targetFile = $targetDirectory . $filename;

        // Move the uploaded file
        $moveUploadedFile = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);
        
        if ($moveUploadedFile) {
            echo '<script language="javascript">';
echo 'alert("File successfully uploaded!")';
echo '</script>';
        } else {
            echo "Error: Failed to move the uploaded file";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your File</title>
    <style>
        body{
  display: flex;
  justify-content:center;
  width:100vw;
  height: 100vh;
  align-items:center;
  overflow: hidden;
}
input[type=submit]{
        background: #084cdf;
    max-width: 100%;
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    border: 0;
}
input[type=file] {
  width: 300px;
  max-width: 100%;
  color: #444;
  padding: 5px;
  background: #fff;
  border-radius: 8px;
  border: 1px solid #555;
  margin-bottom: 25px;
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #084cdf;
  padding: 10px 20px;
  border-radius: 8px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}
.upload-form{
    text-align:center;
}
    </style>
</head>
<body>
    <div class="upload-form">
        <h2>Upload a File</h2>    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload">
        <br>
        <input type="submit" value="Upload File" name="submit">
    </form>
    </div>
</body>
</html>