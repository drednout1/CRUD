<form>
    search: <input name="txt">
    <button>Search</button>
</form>


<?php
if ($_GET['txt']) {
    $myfile = fopen("tasks.txt", "a");
    fputs($myfile, $_GET['txt'] . PHP_EOL);
    fclose($myfile);
};



$myfile = fopen("tasks.txt", "r");
echo '<table>';
$counter = 1;
while (($table = fgets($myfile)) !== false) {
    echo '<tr>
    <td>' . $table . '</td>';
    echo '<td><a href="delete.php?id=' . $counter++ . '">X</a></td>';
    '</tr>';
}
echo '</table>';
fclose($myfile);

if ('X') {
    $append = fopen("delete.php", "a");
    fputs($append, $myfile . PHP_EOL);
    fclose($append);
}
?>

<button name='confirm'>Confirm</button>

<?php

$rebuild = fopen("delete.php", "r");
echo '<table>';
if ("confirm") {
    $tbl = fgets($);
    echo '<tr>
    <td>' . $tbl . '</td>';
    '</tr>';
}
echo '</table>';
fclose($rebuild)

?>