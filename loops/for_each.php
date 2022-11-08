<div class="title">
    ForEach
</div>

<?php

$array = [
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
];

foreach($array as $dayOfTheWeek){
    echo "<br> $dayOfTheWeek";
}

foreach($array as $key => $dayOfTheWeek){
    echo "<br> $key => $dayOfTheWeek";
}


$matrix = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

foreach($matrix as $line){
    foreach ($line as $valor){
        echo '<br>' .  $valor;
    }
}

$number = [1, 2, 3, 4, 5];

foreach ($number as &$double){
    $double *= 2;
    echo "<br> {$double}";
}