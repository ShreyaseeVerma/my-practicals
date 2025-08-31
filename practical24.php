<?php
// Create an indexed array
$numbers = array(5, 10, 15, 20, 25);

// Method 1: Using foreach loop
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}

echo "Array Elements: ";
print_r($numbers);

echo "\nSum of all numbers (using foreach): $sum\n";

// Method 2: Using built-in array_sum()
$sum2 = array_sum($numbers);
echo "Sum of all numbers (using array_sum): $sum2\n";
?>
