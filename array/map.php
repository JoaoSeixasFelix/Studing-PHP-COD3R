<div class="title">
    Map(Key x Value)
</div>

<?php

$data = array (
    "age" => 25,
    "color" => "verde",
    "weight" => 49.8
);

$data["name"] = "Helder Maldonado"; 

print_r($data);
echo "<br>";
var_dump ($data['age']);
echo "<br>";
var_dump ($data['color']);
echo "<br>";
var_dump ($data['weight']);