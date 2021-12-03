<?php $id = rawurldecode($_GET['id']); ?>
<form method="post" action="?controller=saved&action=updated&id=<?php echo rawurlencode($id); ?>">
    <fieldset>
        <legend>Renseignez les modifications sur la personne secourue :</legend>
        <p>
            <label for="nom">Nom de la personne sauvée</label> :
            <input type="text" value="<?php echo modelSaved::getSaved($id)->getNom(); ?>" name="nom" id="nom" required/>
        </p>
        <p>
            <label for="prenom">Prénom de la personne sauvée</label> :
            <input type="text" value="<?php echo modelSaved::getSaved($id)->getPrenom(); ?>" name="prenom" id="prenom" required/>
        </p>
        <p>
            <label for="sortiesav">Nom de la sortie durant laquelle le sauvetage a eu lieu</label> :
            <input type="text" placeholder="Ne pas remplir si la sortie reste la même." name="sortie" class="sortie"/>
        </p>
        <p>
            <label for="date">Date du sauvetage</label> :
            <input type="text" value="<?php echo modelSaved::getSaved($id)->getDate(); ?>" name="date" class="date" required/>
        </p>
        <p>
            <input type="submit" value="Soumettre" />
        </p>
    </fieldset>
</form>
