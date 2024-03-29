<?php

//get the uploaded files from directory
function getUploadedFiles($dir = 'uploads') {
    $files = scandir($dir);
    return array_filter($files, function ($file) use ($dir) {
        return !in_array($file, array('.', '..')) && !is_dir($dir . '/' . $file);
    });
}
//to display file with downloadable link
function displayUploadedFiles($files) {
    $html = '<div class="grid">'; 
    foreach ($files as $file) {
        //Basically, shows the resources under the "Uploaded Resources" section
        $fileUrl = "uploads/" . htmlentities($file);  // The path to the file
        $html .= '<section class="cell">';  
        $html .= '<h3>' . htmlentities($file) . '</h3>';  // Display the file name
        // Add a link to download the file.
        $html .= '<p><a href="' . $fileUrl . '" download>Download</a></p>'; 
        $html .= '</section>';
    }
    $html .= '</div>';
    return $html;
}

//call functions
$files = getUploadedFiles();
echo displayUploadedFiles($files);
?>