<?php
$upload_dir = "uploads/";
$maxSize = 2 * 1024 * 1024; // 2 Mo
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];

// Vérifier que le dossier d’upload existe, sinon le créer
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

if (isset($_FILES['mon_fichier']) && $_FILES['mon_fichier']['error'] === 0) {
    $tmp_name = $_FILES['mon_fichier']['tmp_name'];
    $nom_fichier = basename($_FILES['mon_fichier']['name']);
    $chemin_destination = $upload_dir . $nom_fichier;

    // Vérifier la taille du fichier
    if ($_FILES['mon_fichier']['size'] > $maxSize) {
        echo "Erreur : le fichier dépasse la taille maximale autorisée (2 Mo).";
        exit;
    }

    // Vérifier le type MIME du fichier
    $typeMime = mime_content_type($tmp_name);
    if (!in_array($typeMime, $allowedTypes)) {
        echo "Erreur : type de fichier non autorisé. Seuls JPG, PNG, GIF et PDF sont permis.";
        exit;
    }

    // Vérifier si le fichier existe déjà
    if (file_exists($chemin_destination)) {
        echo "Erreur : un fichier portant ce nom existe déjà sur le serveur.";
        exit;
    }

    // Déplacer le fichier vers le dossier de destination
    if (move_uploaded_file($tmp_name, $chemin_destination)) {
        echo "✅ Fichier uploadé avec succès : $nom_fichier";
    } else {
        echo "❌ Erreur lors du téléchargement du fichier.";
    }
} else {
    echo "❌ Aucun fichier sélectionné ou une erreur est survenue.";
}
?>
