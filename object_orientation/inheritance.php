<div class="titl">
Inheritance 
</div>

<?php

class Person {
    public $name;
    public $age;


    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct()
    {
        echo "Person Say: Good Bye!";
    }

    public function toPresent(){
        return "Hello {$this->name}, you have {$this->age} years?";
    }
}



class User extends Person {
    public $login;

    function __construct($name, $age, $login)
    {
        $this->name  = $name;
        $this->age   = $age;
        $this->login = $login;
        echo "User Created!";
    }

    function __destruct()
    {
        echo "User Say: Good Bye!";
    }

    public function toPresent()
    {
        echo "@{$this->login}: {$this->name}, {$this->age} years";
    }
}



$user = new User("Rodolfo", 25, "rodolfo@outlook.com");
$user->toPresent();
unset($user);