<div class="title">
    Multidimensional Array
</div>

<?php

$data = [
    [
        "name" => "Roberto",
        "age" => 26,
        "nacionality" => "Belo Horizonte"
    ],
    [
        "name" => "Maria",
        "age"  => 25,
        "nacionality" => "Sao Paulo"
    ]
    ];

    print_r($data);
    echo '<br>' . $data[0]["name"];
    echo '<br>' . $data[1]["name"];

    //Method to include data inside the array.

    $data[]=[
        "name" => "Fabio",
        "age"  => "45",
        "nacionality" => "Minas Gerais"
    ];

    print_r($data);
    echo '<br>';
    $data[1]["hobby"] = "running";
    
    print_r($data);
    echo '<br>';

    unset($data[1]);
    print_r($data);