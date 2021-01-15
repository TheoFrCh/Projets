<?php
$metaDescription = "L'acceuil";
$metaTitle = "CV Théo";


$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

if ($page) {
    if ($page == 'acceuil') {
        require 'pages/IndexCV.php';
    } elseif ($page == 'hobbies') {
        require 'pages/hobbies.php';
    } elseif ($page == 'contact') {
        require 'pages/contact.php';
    }
    else {
        require 'ERREUR404.php';
    }
}

