<?php
$res_nom= array();
$alphabet = array(
    'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z');

    foreach ($alphabet as $letter){
        echo $letter;
        $tab = modelSauveteurs::selectAllbyLetter($letter);
        echo "<br>";
        if (!is_null($tab)) {
            foreach ($tab as $p) {
                echo "<p><a href=index.php?controller=sauveteurs&action=read&id={$p->getNom()}> - {$p->getNom()}</a></p>";
                echo "  ";
            }
        }
        echo "<br>";
    }
    ?>
