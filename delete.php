<?php header("Location: index.php"); ?>

<?php
if(isset($_GET['id'])){
$stringnmb = $_GET ['id'];
};

$file = file('tasks.txt');
if(isset($stringnmb) && isset($file)){
    unset($file[$stringnmb]);
};

file_put_contents('tasks.txt', implode("", $file)); ?>