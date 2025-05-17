<?php

function Mon_Compteur($page)
{
    $nom_fichier = "compteurs/compteur_" . $page . ".cpt";

    // Vérifier l'existence du fichier
    if (!file_exists($nom_fichier)) {
        if (!file_exists("compteurs")) {
            mkdir("compteurs", 0777, true);
            // Bases : binaire (0 et 1); octale (0 à 7), décimale, Hexadécimale (+ A à F)
            // 1 => exécution; 2 => écriture; 4 => Lecture
        }
        // Créer et initialiser le fichier à "0"
        $fichier = fopen($nom_fichier, "w");
        fputs($fichier, "0");
        fclose($fichier);
    }

    // Ouverture du fichier en mode lecture/écriture
    $fichier = fopen($nom_fichier, "r+");
    // Récupérer (lire) la première ligne
    $compteur = fgets($fichier);
    // Incrémenter le compteur
    $compteur++;
    // Se positionner sur la 1ère ligne
    fseek($fichier, 0);
    // Mettre le contenu (valeur) du compteur dans le fichier
    fputs($fichier, $compteur);
    fclose($fichier);

    // Afficher
    echo "Nombre de visites du site : " . $compteur;
}
