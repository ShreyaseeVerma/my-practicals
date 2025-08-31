<?php
$numbers = array(45, 12, 78, 23, 56, 89, 34);

echo "Original Array: " . implode(", ", $numbers) . "\n";
echo"<br>";

// Sort in ascending order using sort()
$asc = $numbers; 
sort($asc);
echo "Ascending Order (using sort): " . implode(", ", $asc) . "\n";
echo"<br>";

// Sort in descending order using rsort()
$desc = $numbers;
rsort($desc);
echo "Descending Order (using rsort): " . implode(", ", $desc) . "\n";
?>
