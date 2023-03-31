<div class="title">
Constructors and Destructors 
</div>

<?php

class Person {
    public $name;
    public $age;

    function __construct(string $newName, int $age = 18)
    {
        echo "Constructor Invoked! <br>";
        $this->name = $newName;
        $this->age = $age;
    }

    function __destruct()
    {
        echo "And died! <br>";
    }

    function toPresent (){
      return  "{$this->name} is {$this->age} years old";
    }
}

$personA = new Person("Anna Rose", 26);
$personB = new Person("Jonh Winchester");

echo $personA->toPresent() . "<br>";
unset($personA);

echo $personB->toPresent() . "<br>";
$personB = null;