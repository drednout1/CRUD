<form>
    search: <input name="txt" type="text">
    <button>Search</button>
</form>

<?php

$myfile = fopen("tasks.txt", "a");

if (isset($myfile) && isset($_GET['txt'])) {
    $myfile = fopen("tasks.txt", "a");
    fputs($myfile, $_GET['txt'] . PHP_EOL);
    fclose($myfile);
};

$myfile = fopen("tasks.txt", "r");

if (isset($myfile)){
    echo '<table>';
$counter = 0;
$counter1 = 0;
while (($table = fgets($myfile)) !== false) {
    echo '<tr>
    <td>' . $table . '</td>';
    echo '<td><a href="delete.php?id=' . $counter++ . '">X</a></td>';
    echo '<td><a href="update.php?id=' . $counter1++ . '">Modify</a></td>';
    '</tr>';
}
echo '</table>';
fclose($myfile);}

echo "<pre>";
print_r($_GET['id']);
echo "</pre>";
?>