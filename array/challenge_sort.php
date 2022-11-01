<div class="title">
    Challenge Sort
</div>

<?php
$names = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
$randomNames = array_rand($names);
echo '<h1>' . "$names[$randomNames]" . '</h1>';