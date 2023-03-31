<div class="title">
    Challenger Date using a class
</div>

<?php

class Date
{
    public $day = "01";
    public $month = "January";
    public $year = 1970;

    public function toPresent()
    {
        return "{$this->day}/{$this->month}/{$this->year}";
    }
}


$newDate = new Date();
echo $newDate->toPresent() . "<br>";
$newDate->day = "15";
$newDate->month = "February";
$newDate->year = 1997;
echo $newDate->toPresent() . "<br>";