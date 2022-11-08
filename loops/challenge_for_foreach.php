<div class="title">
    Challenge For/Foreach
</div>

<?php

echo "<p>Using For</p>";

$array = ["AAA", "BBB", "CCC", "DDD", "EEE", "FFF"];

for($i = 0; $i < count($array); $i++){

    if ($i % 2 === 0){
        echo "$array[$i] <br>";
        continue;
        if($i % 2 !=0 ) break;
    }
}

echo "<hr>";
echo "<p>Using ForEach</p>";

foreach($array as $key => $value){
    if($key % 2 === 0){
        echo "$value <br>";
        continue;
        if($key % 2 !=0 ) break;
        
    }
}