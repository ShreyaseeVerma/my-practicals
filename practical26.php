<?php
// Create an indexed array
$numbers = array(10, 20, 30, 40, 50, 60);
print_r($numbers);
echo"<br>";
$reversed = array_reverse($numbers);
echo "Reversed Array (using array_reverse): " . implode(", ", $reversed) . "\n";
?>
