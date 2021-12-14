<?php

function readTextFile($fileDir) {
    $file = fopen($fileDir, 'r') or die("Unable to open file");
    $data = fread($file, filesize($fileDir));
    fclose($file);
    return $data;
}

function readLongTextFile($fileDir) {
    $file = fopen($fileDir, 'r') or die("Unable to open file");
    $data = '';
    while(!feof($file)) {
        $data .= fgets($file);
    }
    fclose($file);
    return $data;
}


function addTextFile($text, $fileDir) {
    $file = fopen($fileDir, 'a') or die("Unable to open file");
    fwrite($file, $text);
    fclose($file);
    return;
}

?>