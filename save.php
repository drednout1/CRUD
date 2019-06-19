<? header("Location: index.php");
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

// if(isset($_GET['id']) & isset( $_GET['modify'])){

if (isset($_GET['change'])) {
    $id = $_GET['change'];
}
if (isset($_GET['modify'])) {
    $newLine = $_GET['modify'];
}
echo $newLine;

$lines = [];

$file = fopen('tasks.txt', 'r');
if (isset($file)) {
    while (($line = fgets($file)) !== false) {
        $lines[] = $line;
    }
    fclose($file);
}

$file = fopen('tasks.txt', 'w');
$counter = 0;
if ($file) {
    foreach ($lines as $line) {
        if ($counter != $id) {
            fputs($file, $line);
        } else {
            fputs($file, $newLine . PHP_EOL);
        }
        $counter++;
    }
    fclose($file);
}
