<?php header("Location: index.php"); ?>

<?php
$stringnmb = $_GET['id'];
$file = file('tasks.txt');
unset($file[$stringnmb]);
file_put_contents('tasks.txt', implode("", $file)); ?>