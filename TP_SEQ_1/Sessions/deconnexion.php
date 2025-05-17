<?php

session_start();
session_destroy();
header("Location: index.php?msg=" . urlencode("Vous venez de vous déconnecter !"));
exit();

?>
