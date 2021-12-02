<!DOCTYPE html>
<html>
<body>
<h1>Détails du bateau</h1>
<?php
require_once file::build_path(array('model','ModelProduit.php'));
$bNom = htmlspecialchars($b->get('nomBateau'));
$bDimensions = htmlspecialchars($b->get('dimensions'));
$bHistoire = htmlspecialchars($b->get('histoire'));
$bPoids = htmlspecialchars($b->get('poids'));
$bVitesse = htmlspecialchars($b->get('vitesse'));
$bId = rawurlencode($b->get('idBateau'));
echo "<p>Bateau : $bNom de dimensions $bDimensions, poids = $bPoids, vitesse de croisière = $bVitesse </p>";
if(Session::is_admin()){
    echo "<p><a href=index.php?action=delete&id=$bId"."&controller=bateau>Supprimer le bateau</a></p>";
    echo "<p><a href=index.php?action=update&id=$bId"."&controller=bateau>Modifier le bateau</a></p>";
}
?>
</body>
</html>
