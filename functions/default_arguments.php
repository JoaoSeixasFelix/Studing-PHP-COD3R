<div class="title">
    Default Values
</div>

<?php

function saudation ($name = 'Sir', $lastName = 'Cliente'){
    return "Welcome, $name $lastName!<br>";
};

echo saudation(NULL);
echo saudation("Lord", "Sith");
echo saudation("Lord", "Torras");

function takeOrder ($food, $drink = 'Water'){
    return "To Eat: $food <br> To Drink: $drink";
}


echo takeOrder("Noodle", "Wine");