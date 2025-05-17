<?php
$nomFichier = "compteur.cpt";

// Vérifier si le fichier n'existe pas encore
if (!file_exists($nomFichier)) {
    // Créer et initialiser le fichier avec 0
    $fichier = fopen($nomFichier, "w");
    fputs($fichier, "0");
    fclose($fichier);
}

// Ouvrir le fichier en mode lecture/écriture
$fichier = fopen($nomFichier, "r+");

// Lire la première ligne (le compteur actuel)
$compteur = fgets($fichier);

// Incrémenter le compteur
$compteur++;

// Revenir au début du fichier
fseek($fichier, 0);

// Écrire le nouveau compteur
fputs($fichier, $compteur);

// Fermer le fichier
fclose($fichier);

// Affichage (optionnel)
echo "Nombre de visites : " . $compteur;
?>
