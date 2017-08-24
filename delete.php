<?php

$name = './files/' . $_GET["file"];

if (unlink($name)) echo 'Deleted';
else echo 'error';