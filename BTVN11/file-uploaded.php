<?php

require "file-check.php";
require "file-reader.php";
// Lay thong tin file
$file = $_FILES["text-file"];

// Check dieu kien validate -> thoa man luu vao folder
checkTextFile($file);
$targetDir = "uploads/";
$targetFile = $targetDir . basename($file['name']);

?>

<h1>Noi dung file</h1>

<?php
// ghi them noi dung vao file
addTextFile("Test-addText", $targetFile);

// Doc noi dung file de hien thi len man hinh
echo readTextFile($targetFile);