<?php
// On inclut les fichiers de classe PHP avec require_once
// pour éviter qu'ils soient inclus plusieurs fois
require_once 'conf.php';

// On affiche le login de la base de donnees
echo conf::getLogin();
echo conf::getDataBase();
echo conf::getPassword();
echo conf::getHostName();
?>
