<div class="title">
    Static Member
</div>

<?php

class A
{
    public $notStatic = 'Instance Variable';
    public static $static = "Class Variable(Static)";

    public function toPresentA(){
        echo "Not Static = {$this->notStatic}<br>";
        echo "Static = " . self::$static . "<br>";
    }
    public static function toPresentStatic(){
        // echo "Not Static = {$this->notStatic}<br>"; "this" will not be available in static functions
        echo "Static = " . self::$static . "<br>";
     } 
}

$aObjetc = new A();
$aObjetc->toPresentA();
$aObjetc->toPresentStatic();
A::toPresentStatic();