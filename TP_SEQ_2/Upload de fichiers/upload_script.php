<?php
$fichiers_uploads = 'fichiers uploadés/';

if (!file_exists(!$fichiers_uploads)) {
    mkdir($fichiers_uploads, 0700, true);
}

if (isset($_FILES['mon_fichier'])) {
    $tmp_name = $_FILES['mon_fichier']['tmp_name'];
    $nom_fichier = basename($_FILES['mon_fichier']['name']);
    $chemin_destination = $fichiers_uploads . $nom_fichier;

    if (file_exists($chemin_destination)) {
        echo "Ce fichier existe déjà !";
    }



    if (move_uploaded_file($tmp_name, $chemin_destination)) {
        echo "Fichier uploadé !!!";
    } else {
        echo "Erreur de chargement !";
    }
} else {
    echo "Erreur : aucun fichier choisi ! ";
}
