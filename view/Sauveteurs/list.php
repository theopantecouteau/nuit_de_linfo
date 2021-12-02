<?php
var_dump($tab);
$alphabet = array(
    'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z');

    foreach ($alphabet as $letter){
        echo $letter;
        $tab = modelSauveteurs::selectAllbyLetter($letter);
        foreach ($tab as $p){
            $p->getNom();
        }
    }
