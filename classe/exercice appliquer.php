<?php

function calculerAge($dateNaissance) {
    
    $dateNaissance = new DateTime($dateNaissance);
    
    $aujourdhui = new DateTime();
    
    $age = $aujourdhui->diff($dateNaissance);
    
    return $age->y;
}


$apprenants = [
    "Amine Morgane" => "1997-01-15",
    "Lambert Aimeric" => "1997-01-15",
    "Gantois Zoé" => "1997-01-15",
    "Bouza Fati" => "1997-01-15",
    "Abdessamad EL MAZGHY" => "1997-01-15"
];


foreach ($apprenants as $nom => $dateNaissance) {
    echo $nom . " a " . calculerAge($dateNaissance) . " ans.\n";
}
?>
