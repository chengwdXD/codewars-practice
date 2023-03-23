<?php
function sum(array $a): float {
  //陣列中數字總和
  return array_sum($a);
}
$array=[1,2,3];
echo sum($array);
?>