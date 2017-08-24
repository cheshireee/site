<?php

if ($_POST) {
    $create = fopen("./files/" . $_POST['name'] . '.txt', "a+");
    fwrite($create, $_POST['content']);
    fclose($create);
}
echo "<a href = 'main.php' > To main </a>";
?>
<form action="create.php" method="post">
    <input type="text" name="name" placeholder="Print name file"><br/>
    <textarea name="content"></textarea><br/>
    <button type="submit">Create file</button>
</form>