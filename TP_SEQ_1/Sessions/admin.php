<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php?msg=" . urlencode("Vous êtes déconnecté. Veuillez vous connecter svp !"));
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Page d’administration du site</h1>
    <p style="color: green;"><?= isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : "" ?></p>
    
    <a href="deconnexion.php" class="btn btn-danger btn-sm">Se déconnecter</a>
</body>
</html>
