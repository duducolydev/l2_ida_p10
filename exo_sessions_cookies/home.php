<?php
session_start();

$nom = "";

if (isset($_COOKIE["utilisateur"])) {
    $nom = $_COOKIE["utilisateur"];
} elseif (isset($_SESSION["utilisateur"])) {
    $nom = $_SESSION["utilisateur"];
}

if (!$nom) {
    header("Location: login.php"); // Redirige vers login si pas connecté
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $nom; ?> !</h2>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
