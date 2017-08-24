<?php

$file = $_FILES['uploadfile'];

$a = filesize($file['tmp_name']);
echo $a;
if (is_file($file['tmp_name']) && (filesize($file['tmp_name']) < 1024 * 2 * 1024)) {
    $file_pass = 'files/' . $file['name'];
    if (move_uploaded_file($file['tmp_name'], $file_pass))
        echo "upload!";
    else echo "error";
}

?>


