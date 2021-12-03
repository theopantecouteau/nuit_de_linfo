<?php
$id = $_GET['id'];
$p = modelSaved::getSaved($id);
echo 'Nom : '. htmlspecialchars($p->getNom()) .'<br>';
echo 'Prénom : '. htmlspecialchars($p->getPrenom()) .'<br>';
echo 'Date du sauvetage : '. htmlspecialchars($p->getDate()) .'<br>';
echo '<a href="?controller=site&action=redirect&page=">'.htmlspecialchars(modelSortie::getSortiebyID($p->getIdSauvetage)).'</a><br>';
echo "Vous souhaitez proposer la modification d\'une personne sauvée ? Remplissez le <a href=?controller=saved&action=update&id=$id>formulaire</a> et nous analyserons votre suggestion !";
?>