<?php
session_start();

$_SESSION["nom"] = "Aly Ba";
$_SESSION["email"] = "aly.ba@gmail.com";
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
        }
    ?>
</body>
</html>