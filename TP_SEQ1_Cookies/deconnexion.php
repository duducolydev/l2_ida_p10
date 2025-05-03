<?php

setcookie("utilisateur", $userLogin, time() - (86400 * 30), "/");
header("Location: index.php?msg=" . urlencode("Vous êtes déconnecté !"));
exit();