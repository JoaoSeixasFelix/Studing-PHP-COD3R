<div class="title">
    Challenge - Logical Operators
</div>

<form action="#" method="post">
    <div>
        <label for="t1"> Work 1 (Tuesday): </label>
        <select name="t1" id="t1">
            <option value="1">
                Executed
            </option>
            <option value="0">
                Not Executed
            </option>
        </select>
    </div>
    <div>
        <label for="t2"> Work 2 (Thursday): </label>
        <select name="t2" id="t2">
            <option value="1">
                Executed
            </option>
            <option value="0">
                Not Executed
            </option>
        </select>
    </div>
    <button>Execute</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;

    }
</style>

<?php

$heWorkTuesday = !!$_POST['t1'];
$heWorkThursday = !!$_POST['t2'];
$television = '';

if ($heWorkTuesday && $heWorkThursday){
    $television = 50;
    echo "Great news!! <br> They bought a ${television} inch tv and still had ice cream.";
} else if($_POST['t1'] == 1 || $_POST['t2'] == 1){
    $television = 32;
    echo "Good news!! <br> They bought a $television inch tv and still had ice cream.";
} else {
    echo "Bad news... <br> Today, let's not leave the house";
}