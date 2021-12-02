<form class="transparent" method="post">
<fieldset>
    <legend>Renseignez vos informations :</legend>
        <p>
            <label for="nom">Nom de la personne sauvée</label> :
            <input type="text" name="nom" id="nom" required/>
        </p>
        <p>
            <label for="prenom">Prénom de la personne sauvée</label> :
            <input type="text" name="prenom" id="prenom" required/>
        </p>
        <p>
            <label for="sortie">Nom de la sortie durant laquelle le sauvetage a eu lieu</label> :
            <input type="text"  name="sortie" class="sortie" required/>
        </p>
        <p>
            <label for="date">Date du sauvetage</label> :
            <input type="date" name="date" class="date" required/>
        </p>
        <p>
            <input type="submit" value="Soumettre" />
        </p>
</fieldset>
</form>
