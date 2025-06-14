<?php

session_start();
$page = 'accueil';
include 'compteur.php';

if (!isset($_SESSION['PAGES_LIST'])) {
    $_SESSION['PAGES_LIST'] = [];
}

// On vérifie si la page a déja été visitée
if(!in_array($page, $_SESSION['PAGES_LIST'])) {
    $_SESSION['PAGES_LIST'][]= $page;
    Mon_Compteur($page);
} else {
    echo "Cette page a déjà été visitée au cours de cette session !";
}
