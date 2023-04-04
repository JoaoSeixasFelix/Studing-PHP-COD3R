<div class="title">
    First Class
</div>

<?php

class Cliente {
    public $name = "Anonymous";
    public $age  = "18";

    public function toPresent (){
       return "Name: {$this->name}, Age: {$this->age}<br>";
    }
}

$c1 = new Cliente();
$c1->name = "Livinho Xavier";
echo $c1->toPresent()       ;