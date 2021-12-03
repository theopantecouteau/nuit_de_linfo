<?php
    if (!is_null($tab)) {
        foreach ($tab as $p) {
            echo ("<h1>{$p->getPrenom()}</h1>");
            echo ($p->getDescription());
            echo ($p->getDatenaissance());
            echo ($p->getDatemort());
            echo($p->getId());
            echo "<p>Pour modifier des données, cliquez <a href=index.php?controller=sauveteurs&action=update&id={$p->getId()}>ici</a></p>";
        }
    }

    ?>




