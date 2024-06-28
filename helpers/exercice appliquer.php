<?php
$apprenants = ["Amine Morgane", "Lambert Aimeric", "Gantois Zoé", "Bouza Fati"];

shuffle($apprenants);

foreach ($apprenants as $apprenant) {
    echo $apprenant . "\n";
}
?>

