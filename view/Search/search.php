<?php


foreach($p as $sauveteur){
    var_dump($p);
    $id = $sauveteur->getId();
    echo ("<p><a href=index.php?controller=sauveteurs&action=readid&id={$id}>{$sauveteur->getNom()}</a></p>");
    echo "<br>";
}

foreach ($c as $bateau){
    $id = $bateau->getId();
    echo ("<p><a href=index.php?controller=bateau&action=read&id={$id}>{$bateau->getNomBateau()}</a></p>");
    echo "<br>";

}

?>