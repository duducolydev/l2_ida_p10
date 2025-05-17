<?php
session_start(); // Démarrage de la session

$page = "accueil"; // Identifiant unique de la page
include("compteur.php");

// Initialiser le tableau de pages si nécessaire
if (!isset($_SESSION['PAGES_LIST'])) {
    $_SESSION['PAGES_LIST'] = [];
}

// Si la page n’a pas encore été visitée dans cette session
if (!in_array($page, $_SESSION['PAGES_LIST'])) {
    $_SESSION['PAGES_LIST'][] = $page; // Marquer la page comme visitée
    Mon_Compteur($page); // Incrémenter le compteur
} else {
    echo "Déjà visité cette page dans cette session.";
}
?>
