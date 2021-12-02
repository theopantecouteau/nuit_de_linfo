<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="">
<h1>Liste des bateaux</h1>
<?php
foreach ($tab_b as $b){
    $bNom = htmlspecialchars($b->get('nomBateau'));
    $bid = rawurlencode($b->get('id'));
    echo "<p> <a href=index.php?action=read&id=$bid&controller=bateau> Bateau $bNom</a></p>";
}
?>
</body>
</html>
