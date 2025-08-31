<?php
 $arr=array(5,7,7,45,55,66,778,56,233,654,65);
 echo "Original Array:"."<br>";
print_r($arr);

// 1. sort() – Ascending order (values only)
$sorted = $arr;
sort($sorted);
echo "<br>"."\nAfter sort():"."<br>";
print_r($sorted);

?>