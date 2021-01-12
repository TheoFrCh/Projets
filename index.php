<?php
$metaDescription = "Voici le site servant de support à mon CV";
$metaTitle = "CV Théo";
require 'header.php';


if (isset($_GET ['page'])) {
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    if ($page == 'acceuil') {
        require 'IndexCV.php';
    }

    elseif ($page == 'hobbies') {
        require 'hobbies.php';
    }

    elseif ($page == 'contact') {
        require 'contact.php';
    }
   else {
    require 'ERREUR404.php';
    }
}
require 'footer.php';
