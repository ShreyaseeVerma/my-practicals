<?php
// Create an indexed array
$numbers = array(25, 5, 42, 17, 8, 63, 1, 99, 12);
print_r($numbers);
echo"<br>";
$largest = $numbers[0];
$smallest = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $largest) {
        $largest = $num;
    }
    if ($num < $smallest) {
        $smallest = $num;
    }
}

echo "Largest Number (using loop): $largest\n";
echo"<br>";
echo "Smallest Number (using loop): $smallest\n";
?>
