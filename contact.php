<?php
$metaDescription = "Voici le site servant de support à mon CV";
$metaTitle = "CV Théo";
?>
<h1>Contact</h1>
<form method="POST" action="https://httpbin.org/post">
    <p><u>Commentaire</u></p>

    <label for="civilité">Civilité :</label>
    <select name="sexe" id="civilité">
        <option value="">--Votre civilité--</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select>

    <p>
        <label for="Nom">Votre Nom :</label>
        <input type="text" name="Nom" id="Nom" minlength="2" maxlength="15"
               placeholder="Ex : Dupont" required>
    </p>

    <p>
        <label for="prenom">Votre Prénom :</label>
        <input type="text" name="prenom" id="prenom" minlength="2" maxlength="15"
               placeholder="Ex : Jean" required>
    </p>

    <p>

        <label for="mail">Votre adresse Mail :</label>
        <input type="email" name="mail" id="mail" minlength="5" maxlength="30"
        placeholder="exemple@exemple.com">

    </p>

    <p>Raison du contact :</p>
    <div>
        <input type="radio" id="propemploi" name="Raison du contact" value="Proposition d'emploi"
               checked>
        <label for="propemploi">Proposition d'emploi</label>
    </div>

    <div>
        <input type="radio" id="dmdinfo" name="Raison du contact" value="Demande d'information">
        <label for="dmdinfo">Demande d'informations</label>
    </div>

    <div>
        <input type="radio" id="presta" name="Raison du contact" value="Prestation">
        <label for="presta">Prestations</label>
    </div>


    <p>Votre message :</p>

    <p>
        <textarea name="Message" id="Msg" cols="40" rows="20" placeholder="Inserez un commentaire"></textarea>
        <button type="submit" value="Envoyer">Envoyer</button>
    </p>


</form>

</main>
