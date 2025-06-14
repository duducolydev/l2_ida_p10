<!DOCTYPE html>
<html>

<head>
    <title>Liste des fichiers à téléchargeables</title>
</head>

<body>
    <h2>Fichiers disponibles au téléchargement</h2>

    <?php
    $dossier = 'fichiers uploadés/';
    if (file_exists($dossier)) {
        $fichiers = array_diff(scandir($dossier), array('.', '..'));

        if (empty($fichiers)) {
            echo "<p>Aucun fichier disponible.</p>";
        } else {
            echo "<ul>";
            foreach ($fichiers as $fichier) {
                $url = $dossier . urlencode($fichier);
                echo "<li><a href=\"$url\" download>$fichier</a></li>";

                //$url = "telecharger.php?fichier=" . urlencode($fichier);
                //echo "<li>Télécharger le fichhier : <a href=\"$url\">$fichier</a></li>";
            }
            echo "</ul>";
        }
    } else {
        echo "<p>Dossier inexistant !</p>";
    }
    ?>
</body>

</html>