
<div id="container">
    <form method="post" action="index.php?controller=message&action=created" enctype=\"multipart/form-data\">
        <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
            <div id="gauche">
                <label  for="Id_id" class="form-label">Prénom</label> :
                <input type="text" placeholder="entrez votre nom" class="form-control" name="prenom" id="Id_id" required/>
            </div>

            <div id="centre" class="mb-3">
                <label  class="form-label">Message </label>
                <input type="text" placeholder="entrez votre message" class="form-control" name="message" required>
            </div>

            <div>
                <label class="form-label" for="img_id">Image</label>
                <input type="file" name="image" id="img_id" />
            </div>
            </p>
            <p>
                <button id="boutonPost" type="submit" name="valider">Poster</button>
            </p>
        </fieldset>
    </form>
</div>
