<?php
if (isset($_POST['submit'])) {
    // Check if a file was uploaded
    if (isset($_FILES['myfile'])) {
        // Get the file details
        $fileTmpName = $_FILES['myfile']['tmp_name'];
        $fileName = $_FILES['myfile']['name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileType = $_FILES['myfile']['type'];
        $fileError = $_FILES['myfile']['error'];

        // Check for upload errors
        if ($fileError === 0) {
            // Define the target directory for the file
            $targetDir = "../images/";
            $targetFile = $targetDir . basename($fileName);

            // Check if the file already exists in the target directory
            if (!file_exists($targetFile)) {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    echo "The file " . $fileName . " has been uploaded successfully!";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Sorry, file already exists.";
            }
        } else {
            echo "Error code: " . $fileError;
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>
