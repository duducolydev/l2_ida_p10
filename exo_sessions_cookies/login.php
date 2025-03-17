<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $remember = isset($_POST["remember"]);

    if (!empty($nom)) {
        if ($remember) {
            setcookie("utilisateur", $nom, time() + (86400 * 30), "/"); // Cookie valable 30 jours
        } else {
            $_SESSION["utilisateur"] = $nom;
        }
        header("Location: home.php"); // Redirection vers la page d'accueil
        exit();
    } else {
        $message = "Veuillez entrer un nom.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="post">
        <label>Nom:</label>
        <input type="text" name="nom" required>
        <br>
        <input type="checkbox" name="remember"> Se souvenir de moi
        <br>
        <button type="submit">Se connecter</button>
    </form>

    <?php if (isset($message)) echo "<p style='color:red;'>$message</p>"; ?>
</body>
</html>
