<form method=post action="index.php?controller=sauveteurs&action=<?php echo $actionFormulaire; ?>">
    <fieldset>
        <legend>Créer un sauveteur</legend>

        <p>
            <label for="idId">Id</label> :
            <input type="number" value="<?php echo $id; ?>" name="id" for="idId" required>
        </p>
        <p>
            <label for="idNom">Nom</label> :
            <input type="text" value="<?php echo $nom; ?>" name="nom" id="idNom" required />
        </p>
        <p>
            <label for="idPrenom">Prénom</label> :
            <input type="text" value="<?php echo $prenom; ?>" name="prenom" id="idPrenom" required />
        </p>
        <p>
            <label for="idDescription">Description</label> :
            <input type="text" name="description" value="<?php echo $description; ?>" id="idDescription" required />
        </p>
        <p>
            <label for="idDateNaissance">Date de naissance</label> :
            <input type="text" name="naissance" placeholder="2020-04-30" value="<?php echo $dateNaissance; ?>" id="idDateNaissance"  />
        </p>

        <p>
            <label for="idDateMort">Date de mort</label> :
            <input type="text" name="mort" placeholder="2020-04-31" value="<?php $dateMort; ?> " id="idDateMort"  />
        </p>
        <input type="submit" value="<?php echo $bouton; ?>" />
    </fieldset>
</form>
