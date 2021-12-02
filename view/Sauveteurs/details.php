<?php
var_dump($tab);
    if (!is_null($tab)) {
        foreach ($tab as $p) {
            echo ("<h1>{$p->getPrenom()}</h1>");
            echo ($p->getDescription());
        }
    }

    ?>




