<div class="title">
    Interfaces
</div>

<?php


interface Animal {
    function breathe ();
}

interface Canine {
    function bark ();
}

class dog implements Animal, Canine {
    function breathe()
    {
        return "I will use air";
    }
    function bark()
    {
        return "AU AU AU";
    }
}
$animal = new dog();
echo $animal->breathe() . "<br>";
echo $animal->bark() . "<br>";
echo "End!";