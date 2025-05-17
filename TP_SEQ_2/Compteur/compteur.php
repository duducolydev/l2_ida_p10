<?php
// Déclaration du fichier
$nom_fichier = "compteur.cpt";

// Vérification de l'existence du fichier
if (!file_exists($nom_fichier)) {
    // Création du fichier en mode écriture et initialisation à 0
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
