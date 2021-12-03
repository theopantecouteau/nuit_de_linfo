<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="">
<h1>Liste des bateaux</h1>
<?php
echo "<p>$histoire</p>";
foreach ($tab_b as $b){
    $bNom = htmlspecialchars($b->get('nom'));
    $bid = rawurlencode($b->get('id'));
    echo "<p> <a href=index.php?action=read&id=$bid&controller=bateau> Bateau $bNom</a></p>";

}
echo "<p><a href=index.php?action=create&controller=bateau>Ajouter un BOAT</a></p>";
?>
</body>
</html>
