<div class="title">
    Recursion
</div>
    
<?php

function addOneToFour($number){
    $sum = 0;
    for(; $number>=1; $number--){
        $sum += $number;
    }
    return $sum;
}

echo addOneToFour(15) . '<br>';


function recursiveSumOneTo($number){
    //Stop Condition
    if($number===1){
        return 1;
    }
    return $number + recursiveSumOneTo($number - 1);
}

echo recursiveSumOneTo(5) . '<br>';