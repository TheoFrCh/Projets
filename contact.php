<?php
$metaDescription = "Voici le site servant de support à mon CV";
$metaTitle = "CV Théo";
?>
<h1>Contact</h1>
<form method="POST" action="https://httpbin.org/post">
    <p><u>Commentaire</u></p>
    <p>
        <label for="Nom">Votre Nom</label> : <input type="text" name="Nom" id="Nom" maxlength="15"
                                                    placeholder="Ex : Jean" required>
    </p>

    <p>Sexe :</p>
    <label for="Femme">Femme :</label><input type="radio" name="genre" value="Femme" id="Femme" required>
    <br>
    <label for="Homme">Homme :</label><input type="radio" name="genre" value="Homme" id="Homme" required>

    <p>
        <select name="Region" id="Region" required>
            <option value="">--Choisissez votre région--</option>
            <option value="">Nord de la France</option>
            <option value="">Centre de la France</option>
            <option value="">Sud de la France</option>
            <option value="">Outre-Mer</option>
        </select>
    </p>

    <p>Votre message :</p>

    <p>
        <textarea name="Message" id="Msg" cols="40" rows="20" placeholder="Inserez un commentaire"></textarea>
        <button type="submit" value="Envoyer">Envoyer</button>
    </p>


</form>

</main>
