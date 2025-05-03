<?php
    // On définit un cookie
    $nom_du_cookie = "utilisateur";
    $valeur_du_cookie = "Mme L'inconnue";
    $date_expiration = time() + (86400 * 30); // Expire au bout de 30 jours

    setcookie($nom_du_cookie, $valeur_du_cookie, $date_expiration);
    
    // On modifie ici la valeur du cookie 
    setcookie($nom_du_cookie, $valeur_du_cookie, $date_expiration);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Bienvenue !</h1>
    <?php 
        // On teste ici si le cookie a expiré
        if ($date_expiration < time()) {
                echo "Cookie expiré <br>";
            }
        // On teste ici si le cookie a été défini 
        if (isset($_COOKIE[$nom_du_cookie])) {
            // Si le cookie est défini, alors :
            echo "<p>Bonjour <strong>" .$_COOKIE[$nom_du_cookie]  . "</strong></p>";
        } else {
            // Sinon :
            echo "Le cookie spécifié n'est pas défini !";
        }
    ?>
</body>

</html>