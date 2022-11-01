<div class="title">
    Array Operations
</div>

<?php

$data1 = [
    "name" => "Joseph",
    "age" => 26
];

$data2 = [
    "nacionality" => "Brazilian"
];

$completeData = $data1 + $data2;
print_r($completeData);

echo '<br>' . is_array($completeData);
echo '<br>' . count($completeData);

echo'<br>';
$index = array_rand($completeData);
echo "$index = $completeData[$index]";
echo'<br>';
echo "{$completeData['age']}";
echo "${completeData['age']}";

unset ($completeData["name"]);
echo '<br>';
print_r($completeData);

unset($completeData["name"]);
echo '<br>';
print_r($completeData);

unset($completeData);
echo '<br>';
var_dump($completeData);

$pairs = array(0, 2, 4, 6, 8);
$odd = array(1, 3, 5, 7, 9);

$decimals = array_merge($pairs, $odd);
echo '<br>';
print_r($decimals);

sort($decimals);
echo '<br>';
print_r($decimals);
