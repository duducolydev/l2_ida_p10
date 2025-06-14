<?php
$dossier = 'fichiers uploadés/';

if (isset($_GET['fichier'])) {
    $nom = basename($_GET['fichier']); // évite les accès non autorisés
    $chemin = $dossier . $nom;

    if (file_exists($chemin)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $nom . '"');
        header('Content-Length: ' . filesize($chemin));
        flush();
        readfile($chemin);
        exit;
    } else {
        echo "Fichier introuvable.";
    }
} else {
    echo "Aucun fichier spécifié.";
}
