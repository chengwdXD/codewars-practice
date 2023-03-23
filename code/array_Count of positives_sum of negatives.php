<?php
function countPositivesSumNegatives($input) {
    // 計算陣列中正數的數量和負數的總和
    if(empty($input)){
        return [];
    }
    $pos=0;
    $neg=0;
    foreach($input as $value){
        if($value >0){
            $pos++;
        }else if($value <0){
            $neg +=$value;

        }

        }
        return [$pos,$neg];
    }
    $input=[1,2,3,-4,-5,-6];
    list($countPos, $sumNeg) = countPositivesSumNegatives($input);
    //list($a,$b,....)=$array   =>list()可以將陣列中的值,依次賦予給$a,$b...
    echo "Count of positives: $countPos, Sum of negatives: $sumNeg";

?>