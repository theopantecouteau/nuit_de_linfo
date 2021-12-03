<?php
$res_nom= array();
$alphabet = array(
    'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z');

foreach ($alphabet as $letter){
    echo $letter;
    $tab = modelSaved::selectAllbyLetter($letter);
    echo "<br>";
    if (!is_null($tab)) {
        foreach ($tab as $p) {
            $id = $p->getId();
            echo "<p><a href=index.php?controller=saved&action=read&id=$id>{$p->getNom()}</a></p>";
            echo "  ";
        }
    }
    echo "<br>";
}

echo 'Vous souhaitez proposer l\'ajout d\'une personne sauvée ? Remplissez le <a href="?controller=saved&action=create">formulaire</a> et nous analyserons votre suggestion !';
?>