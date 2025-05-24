<?php
$fichiers_uploads = 'fichiers uploadés/';
$maxSize = 1024 * 1024 * 2; // 2Mo
$allowedTypes = ['image/jpg', 'image/png', 'image/gif', 'application/pdf'];

if (!file_exists($fichiers_uploads)) {
    mkdir($fichiers_uploads, 0700, true);
}

if (isset($_FILES['mon_fichier'])) {
    $tmp_name = $_FILES['mon_fichier']['tmp_name'];
    $nom_fichier = basename($_FILES['mon_fichier']['name']);
    $chemin_destination = $fichiers_uploads . $nom_fichier; // "Dossier/sous-dossier/nom_du_fichier.extension"

    if (file_exists($chemin_destination)) {
        echo "Ce fichier existe déjà !";
    }

    $type = mime_content_type($tmp_name);
    if (!in_array($type, $allowedTypes)) {
        echo "Ce type de fichier n'est pas autorisé";
        exit;
    }

    if ($_FILES['mon_fichier']['size'] > $maxSize) {
        echo "Ce fichier est trop volumineux !";
        exit;
    }

    if (move_uploaded_file($tmp_name, $chemin_destination)) {
        echo "Fichier uploadé !!!";
    } else {
        echo "Erreur de chargement !";
    }
} else {
    echo "Erreur : aucun fichier choisi ! ";
}
