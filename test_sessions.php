<?php
session_start();

$_SESSION["nom"] = "";
$_SESSION["email"] = "ba@gmail.com";
$_SESSION["adresse"] = "Pikine";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue sur ma page</h1>
    <?php
        if (isset($_SESSION["nom"])) {
            echo "<p>Votre nom est " . $_SESSION["nom"] . "</p>";
            echo "<p>Votre email est " . $_SESSION["email"] . "</p>";
            echo "<p>Vous habitez à " . $_SESSION["adresse"] . "</p>";
        }
    ?>
</body>
</html>