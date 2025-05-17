<?php
function Mon_Compteur($page) {
    $nomFichier = "compteurs/compteur_" . $page . ".cpt";

    if (!file_exists($nomFichier)) {
        if (!file_exists("compteurs")) {
            mkdir("compteurs", 0777, true);
        }
        $fichier = fopen($nomFichier, "w");
        fputs($fichier, "0");
        fclose($fichier);
    }

    $fichier = fopen($nomFichier, "r+");
    $compteur = fgets($fichier);
    $compteur++;
    fseek($fichier, 0);
    fputs($fichier, $compteur);
    fclose($fichier);

    echo "Nombre de visites pour la page '$page' : " . $compteur;
}
?>
