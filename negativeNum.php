<?php
$count = 0;
$numbers = [];

do {
    $input = (int)readline("Enter a number: ");

    if ($input < 0) {
        echo "Negative number entered. Stopping input.\n";
        break;
    }

    $numbers[] = $input;
    $count++;

} while ($count < 10);

echo "\nNumbers entered:\n";
foreach ($numbers as $num) {
    echo $num . "\n";
}
?>
