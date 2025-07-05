<?php
function checkNum($number)
{ //Fonction avec une exception
    if ($number < 0) {
        throw new Exception("Le nombre $number n'est pas un nombre positif !");
    }
    return true;
}
try { //Declencher une exception dans un bloc "try"
    checkNum(-10);
    // Si l'exception est lancée, ce texte ne sera pas affiché
    echo "Bravo ! le nombre choisi est bien une valeur positive !";
} catch (Exception $e) { //Capturer une exception
    echo 'Message: ' . $e->getMessage();
}
