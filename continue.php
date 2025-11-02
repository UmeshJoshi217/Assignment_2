<?php
for ($num = 1; $num <= 20; $num++) {
    if ($num % 2 == 0) {
        continue; // skip even numbers
    }
    echo $num . "<br>";
}
?>
