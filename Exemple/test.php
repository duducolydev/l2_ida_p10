<?php
$myfile = fopen("essai.txt", "r+");
// Affichage d’une ligne jusqu'à la fin du fichier
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";

}
fclose($myfile);
?> 