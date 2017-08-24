<?php

$name = './files/' . $_GET["file"];

$file = ($name);
header("Content-Type: application/octet-stream");
header("Accept-Ranges: bytes");
header("Content-Length: " . filesize($file));
header("Content-Disposition: attachment; filename=" . $file);
readfile($file);