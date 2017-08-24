<?php

echo " <a href = 'create.php' > Here to create file </a>";
echo " <a href = 'upload.html' > Upload file </a>";
echo '<br>';

$dir = opendir('./files');
while ($im = readdir($dir)) {
    if (!is_dir($im)) {
        echo " <a href = 'look.php?file=$im' >  $im </a>" .
            "<a href = 'change.php?file=$im' > Change </a>" .
            "<a href = 'download.php?file=$im' > Download </a>" .
            "<a href = 'delete.php?file=$im' > Delete </a>" .
            '<br>';
    }
}

