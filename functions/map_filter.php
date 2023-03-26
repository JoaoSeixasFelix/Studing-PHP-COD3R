<div class="title">
    Map & Filter
</div>

<?php


$notes = [5.8, 7.3, 9.8, 6.7];
$finalNotes = [];

foreach ($notes as $note) {
    $finalNotes[] = round($note);
}

print_r($finalNotes);
echo "<br>";

$finalNotes = array_map("round", $notes);

print_r($finalNotes);
echo "<br>";

foreach($notes as $note){
    if($note>=7){
        $onlyApproved[] = $note;
    }
}

print_r($onlyApproved);
echo "<br>";

function approved ($notes){
    return $notes >= 7;  
}

print_r(array_filter($notes, "approved"));
echo "<br>";

