<?php

echo $letter;

foreach($p as $sauveteur){
    echo ($sauveteur->getNom());
}

foreach($c as $bateau){
    echo ($bateau->getNom());
}

foreach ($d as $sauve){
    echo ($sauve->getNom());
}
?>