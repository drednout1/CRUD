<? if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $file = file('tasks.txt');
};

if (isset($file[$id])){
    $line = $file[$id];
}
?>
<form action="save.php">
    modify: <input name="modify" type="text" value="<?= $line ?>">
    <input type="hidden" value="<?= $id ?>" name="change" />
    <button> Confirm</button>
</form>


<?php
echo "<pre>";
print_r(file('tasks.txt'));
echo " </pre> ";

echo $_GET['modify']
?>

<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>