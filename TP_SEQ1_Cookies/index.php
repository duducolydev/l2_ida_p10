<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === $userLogin && $password === $userMdp) {
        setcookie("utilisateur", $userLogin, time() + (86400 * 30), "/");
        header("Location: admin.php?msg=" . urlencode("Connexion réussie !"));
    } else {
        header("Location: index.php?msg=" . urlencode("Nom d'utilisateur et/ou mot de passe incorrect !"));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <?php if (isset($_GET['msg'])) : ?>
        <p class="badge bg-danger"> <?= htmlspecialchars($_GET['msg']) ?> </p>
    <?php endif ?>

    <!-- DEBUT EXEMPLE -->
    <?php //if(isset($_GET['msg'])) { 
    ?>
    <!--<p> <?= htmlspecialchars($_GET['msg']) ?> </p>-->
    <?php // }; 
    ?>
    <!-- FIN EXEMPLE-->
    <form action="" method="post" class="form-control">
        <label for="login" class="form-label"> Nom d'utilisateur </label>
        <input type="text" name="login" class="form-control" id="login" placeholder="mettre votre nom">
        <br>
        <label for="password" class="form-label"> Mot de passe </label>
        <input type="password" name="password" class="form-control" id="password" placeholder="renseigner le mot de passe">
        <br>
        <button type="submit" class="btn btn-success"> Se connecter </button>
    </form>
</body>

</html>