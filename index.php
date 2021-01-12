<?php
$metaDescription = "Voici le site servant de support à mon CV";
$metaTitle = "CV Théo";
require 'header.php';


if (isset($_GET['page'])) {
    $page = $_GET['page'];


    if ($page == 'acceuil') {
        require 'IndexCV.php';
    }

    if ($page == 'hobbies') {
        require 'hobbies.php';
    }

    if ($page == 'contact') {
        require 'contact.php';
    }
    if ($page !='contact'& $page !='hobbies'& $page!='acceuil'){
        echo "Erreur 404";
    }
}
require 'footer.php';
?>

<br>
<a href="info.php">Informations</a>