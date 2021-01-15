<?php
$metaDescription = "La page contact";
$metaTitle = "CV Théo";
require 'header.php';
date_default_timezone_set('Europe/Paris');
$filename = 'contact\contact_' . date('Y-m-d-H-i-s') . '.txt';//Création de la variable donnant le chemin du fichier contact

//Affectation des champs du formulaire à des variables
$sexe = filter_input(INPUT_POST, 'sexe', FILTER_SANITIZE_STRING);
$Nom = filter_input(INPUT_POST, 'Nom', FILTER_SANITIZE_STRING);
$prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
$raisoncontact = filter_input(INPUT_POST, 'raisoncontact', FILTER_SANITIZE_STRING);
$Message = filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_STRING);
$submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);

//Mise en forme du fichier texte d'envoi des données
$formulaire = array(
    'sexe : ' . $sexe . PHP_EOL,
    'Nom : ' . $Nom . PHP_EOL,
    'prenom : ' . $prenom . PHP_EOL,
    'mail : ' . $mail . PHP_EOL,
    'raisoncontact : ' . $raisoncontact . PHP_EOL,
    'Message : ' . $Message . PHP_EOL,
);

$form = true;
$erreur = [];//Tableau vide pour y inclure les erreurs


if (isset($submit)) {

    if (empty($sexe)) {
        $form = false;
        $erreur['errsexe'] = "Vous n'avez pas selectionné votre civilité";
    }
    if (empty($Nom)) {
        $form = false;
        $erreur['errnom'] = "Vous n'avez pas entré votre Nom";
    }
    if (empty($prenom)) {
        $form = false;
        $erreur['errprenom'] = "Vous n'avez pas entré votre Prenom";
    }
    if (empty($mail)) {
        $form = false;
        $erreur['errmail'] = "Vous n'avez pas entré votre adresse Mail";
    }
    if (empty($raisoncontact)) {
        $form = false;
        $erreur['errraisoncontact'] = "Vous n'avez pas coché la raison de votre contact";
    }
    if (empty($Message)) {
        $form = false;
        $erreur['errMessage'] = "Vous n'avez pas entré votre Message";
    } else {
        file_put_contents($filename, $formulaire);//je met les données ssaisies dans le formulaire dans mon fichier txt
    }
}


?>
<h1>Contact</h1>
<form method="POST" action="/index.php/?page=contact">
    <p><u>Commentaire</u></p>

    <label for="civilité">Civilité :</label>
    <select name="sexe" id="civilité">
        <option value="">--Votre civilité--</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select>
    <?php if (isset($erreur['errsexe'])) {
        echo $erreur['errsexe'];
    } ?>

    <p>
        <label for="Nom">Votre Nom :</label>
        <input type="text" name="Nom" id="Nom"
               placeholder="Ex : Dupont">

        <?php if (isset($erreur['errnom'])) {
            echo $erreur['errnom'];
        } ?>
    </p>

    <p>
        <label for="prenom">Votre Prénom :</label>
        <input type="text" name="prenom" id="prenom"
               placeholder="Ex : Jean">
        <?php if (isset($erreur['errprenom'])) {
            echo $erreur['errprenom'];
        } ?>
    </p>

    <p>
        <label for="mail">Votre adresse Mail :</label>
        <input type="text" name="mail" id="mail"
               placeholder="exemple@exemple.com">
        <?php

        if (isset($erreur['errmail'])) {
            echo $erreur['errmail'];
        } ?>
    </p>

    <p>Raison du contact :</p>
    <div>
        <input type="radio" id="propemploi" name="raisoncontact" value="Proposition d'emploi">
        <label for="propemploi">Proposition d'emploi</label>
    </div>

    <div>
        <input type="radio" id="dmdinfo" name="raisoncontact" value="Demande d'information">
        <label for="dmdinfo">Demande d'informations</label>
    </div>

    <div>
        <input type="radio" id="presta" name="raisoncontact" value="Prestation">
        <label for="presta">Prestations</label>
    </div>
    <?php if (isset($erreur['errraisoncontact'])) {
        echo $erreur['errraisoncontact'];
    } ?>

    <p>Votre message :</p>

    <p>
        <textarea name="Message" id="Msg" cols="40" rows="20" placeholder="Inserez un commentaire"></textarea>
        <button name="submit" type="submit" value="Envoyer">Envoyer</button>
        <?php if (isset($erreur['errMessage'])) {
            echo $erreur['errMessage'];
        } ?>
    </p>

</form>
<?php require 'footer.php';?>