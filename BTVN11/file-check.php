<?php


function checkTextFile($file) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($file["name"]);

    // Check phải upload fille
    if (!isset($file["name"])) {
        echo "You have not chosen any file yet";
        return;
    };

    // Check dinh dang file upload
    $textFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if(!in_array($textFileType, ["txt", "csv"])) {
        echo "You can only choose file (txt, csv)";
        return;
    };

    // Check size file upload len
    $textSize = $file["size"];
    if ($textSize > 1048576) {
        echo "File too large";
        return;
    }

    // Luu vao folder nao do
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        $filename = htmlspecialchars(basename($file['name']));
        echo "File " . $filename . " has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}