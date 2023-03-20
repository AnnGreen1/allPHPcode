<?php
$numbers = range(1, 20);
foreach ($numbers as $number) {
    echo "$number ";
}
echo "<br>";
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
?>