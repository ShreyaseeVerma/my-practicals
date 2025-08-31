<?php
// create array of size 10
$arr = array();

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = $i;
}

// print array using foreach loop
foreach ($arr as $index => $value) {
    echo "Index $index = $value"."<br>";
}
?>
