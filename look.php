<?php

$name = './files/' . $_GET["file"];
$a = file_get_contents($name);
echo " <plaintext>$a";//почему то выводит, если поставить закрывающий тег и его