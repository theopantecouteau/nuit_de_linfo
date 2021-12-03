<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="">
<body>
<?php

require_once file::build_path(array('model','modelBateau.php'));
echo ";<form class=\"formulaire\" method=\"post\" action=\"$action\" enctype=\"multipart/form-data\">
  <fieldset>
    <legend>Mon formulaire :</legend>
    <p>";

echo "<label for=\"bateau_id\">ID bateau</label> :
      <input type=\"text\" value=\"$bId\" name=\"idBateau\" id=\"bateau_id\" $rqd/>
      <label for=\"nom_id\">Nom bateau</label>
      <input type=\"text\" value=\"$bNom\" name=\"nomBateau\" id=\"nom_id\" required/>
      <label for=\"constructeur_id\">Constructeur bateau</label>
      <input type=\"text\" value=\"$bConstructeur\" name=\"constructeur\" id=\"constructeur_id\" required/>
      <label for=\"datecommande_id\">Date commande</label>
      <input type=\"date\" value=\"$bDateCommande\" name=\"datecommande\" id=\"datecommande_id\" required/>
      <label for=\"dimensions_id\">Dimensions</label>
      <input type=\"text\" value=\"$bDimensions\" name=\"dimensions\" id=\"dimensions_id\" required/>
      <label for=\"histoire_id\">Histoire</label>
      <input type=\"text\" value=\"$bHistoire\" name=\"histoire\" id=\"histoire_id\" required/>
      <label for=\"typebateau_id\">Type de bateau</label>
      <input type=\"text\" value=\"$bTypebateau\" name=\"typebateau\" id=\"typebateau_id\" required/>
      <label for=\"finservice_id\">Date de fin de service</label>
      <input type=\"date\" value=\"$bFinService\" name=\"finService\" id=\"finservice_id\" required/>
      <label for=\"nomdonnedate_id\">Nom donné à la date : </label>
      <input type=\"date\" value=\"$bNomdonnedate\" name=\"nomdonnedate\" id=\"nomdonnedate_id\" required/>
      <label for=\"numcoque_id\">Identifiant de la coque</label>
      <input type=\"text\" value=\"$bNumcoque\" name=\"numcoque\" id=\"numcoque_id\" required/>
      <label for=\"poids_id\">Poids de la coque</label>
      <input type=\"text\" value=\"$bPoids\" name=\"poids\" id=\"poids_id\" required/>
      <label for=\"vitesse_id\">Vitesse du bateau</label>
      <input type=\"text\" value=\"$bVitesse\" name=\"vitesse\" id=\"vitesse_id\" required/>
      <label for=\"moteur_id\">Moteurs : </label>
      <input type=\"text\" value=\"$bMoteurs\" name=\"moteurs\" id=\"moteur_id\" required/>
      <label for=\"tirantdo_id\">Tirant d'eau jspquoi</label>
      <input type=\"text\" value=\"$bTirant\" name=\"tirantdeau\" id=\"tirantdo_id\" required/>
      <label for=\"idMoyen_id\">ID Moyens Maritimes</label>
      <input type=\"text\" value=\"$bIdMoyen\" name=\"idMoyen\" id=\"idMoyen_id\" required/>";
?>
</p>
<p>
    <input type="submit" value="Envoyer" />
</p>
</fieldset>
</form>
</body>
</html>