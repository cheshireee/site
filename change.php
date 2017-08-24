<?php

if ($_GET["file"]) {//потому что второй раз вызоветься файл без $_GET и будет имя ./files/
    $filename = './files/' . $_GET["file"];
    $file = file_get_contents($filename);
    echo "<form action=\"change.php?filename=$filename\" method=\"post\">
          <textarea type=\"text\" rows=20 cols=80 name=\"a\">$file</textarea><br>
          <input type=\"submit\" value=\"Save\">
          </form>";
}


if ($_POST && $_GET) {
    $filename = $_GET["filename"];
    $file = $_POST['a'];
    $f = fopen($filename, 'w');
    fwrite($f, $file);
    fclose($f);
    echo "<a href = 'main.php' > To main </a>";
}

?>

