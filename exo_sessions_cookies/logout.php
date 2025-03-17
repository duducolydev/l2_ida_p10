<?php
session_start();
session_unset();
session_destroy();
setcookie("utilisateur", "", time() - 3600, "/"); // Supprime le cookie
header("Location: login.php");
exit();
?>
