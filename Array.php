<?php
$a = array(32, 54, 66, 48, 12, 34, 96, 54, 80, 50);
echo "sum(a) = " . array_sum($a) . "\n";
echo "Average = " . array_sum($a)/count($a);
$countvals = array_count_values($a);
print_r(array_count_values($a));
?>