<div class="title">
    Access Modifiers
</div>

<?php

class A
{
    public $public       = "I'm a Public";
    protected $protected = "I'a a Protected";
    private $private     = "I'a a Private";

    public function showA()
    {
        echo "Class A) Public = {$this->public}<br>";
        echo "Class A) Protected = {$this->protected}<br>";
        echo "Class A) Private = {$this->private}<br>";
    }

    private function notShow()
    {
        echo "I will not print";
    }
}


$a = new A ();
$a->showA();


echo "End Class A! <br>";


class B extends A {

    public function showB (){
        echo "<br> Class B) Public = {$this->public}<br>";
        echo "Class B) Protected = {$this->protected}<br>";
        echo "Class B) Private = {$this->private}<br>"; //the private method is visible only inside its own class
    }
}


$b = new B();
$b->showB();