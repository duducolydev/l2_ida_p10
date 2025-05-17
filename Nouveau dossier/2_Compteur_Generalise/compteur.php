<?php
function Mon_Compteur($page) {
    $nomFichier = "compteurs/compteur_" . $page . ".cpt";

    // Vérifier si le fichier n'existe pas encore
    if (!file_exists($nomFichier)) {
        // S'assurer que le dossier existe
        if (!file_exists("compteurs")) {
            mkdir("compteurs", 0777, true); // Créer le dossier si besoin
        }
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

    // Affichage facultatif
    echo "Nombre de visites pour la page '$page' : " . $compteur;
}
?>
