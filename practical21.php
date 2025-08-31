<?php
// create empty array
$arr = array();

// assign values using loop
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = $i;
}
// print array elements
for ($i = 0; $i < 10; $i++) {
    echo "Index $i = " . $arr[$i] . "<br>";
}
?>
