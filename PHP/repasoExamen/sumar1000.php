<?php

$num = 0;
$nums = [];

do{
    $num += readline("Sumar: ");
    array_push($nums, $num);
}while($num <= 1000);

print_r($nums);
echo count($nums) . " números\n";

echo "Media: " . $num/count($nums) . "\n";

?>