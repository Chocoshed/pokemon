<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data0_accueil.php');
include('include/data_commun.php');

// Lancement du moteur Twig :

echo $twig->render('modele1_accueil.twig', [
    'aside' => $aside,
    'main' => $main,
    'asideActu' => $asideActu,
    'header' => $header,
    'footer' => $footer
]);
