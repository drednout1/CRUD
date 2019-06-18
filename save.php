<? header("Location: index.php");
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

// if(isset($_GET['id']) & isset( $_GET['modify'])){
    $id = $_GET['change'];
    $newLine = $_GET['modify'];
    echo $newLine;
// }

    $lines = [];

    $file = fopen('tasks.txt', 'r');
        while (($line = fgets($file)) !== false) {
    $lines[] = $line;
}
fclose($file);

    $file = fopen('tasks.txt', 'w');
    $counter = 0;
        foreach ($lines as $line) {
        if ($counter != $id) {
fputs($file, $line);
        } else {
fputs($file, $newLine . PHP_EOL);
}
    $counter++;
}
fclose($file);

?>