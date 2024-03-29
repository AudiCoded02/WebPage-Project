<?php
//check if posted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/"; // make sure this directory exists and is writable
    $target_file = $target_dir . basename($_FILES["file"]["name"]);//gets the target files
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//get file type

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    //check if file type is as per the pdf instructions "a file type that is a document the professor submits or uploads"
    if ($fileType != "pdf" && $fileType != "pptx" && $fileType != "docx") {
        echo "Sorry, only PDF, PPTX, and DOCX files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
            header("Location: resource.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
