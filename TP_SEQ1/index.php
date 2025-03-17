<?php
session_start();
include 'conn.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] === $userLogin && $_POST['password'] === $userMdp) {
        $_SESSION['user'] = $userLogin;
        header("Location: admin.php?msg=" . urlencode("Bienvenue à la page d’administration du site"));
        exit();
    } else {
        header("Location: index.php?msg=" . urlencode("Login ou mot de passe incorrect !"));
        exit();
    }
}

if (isset($_SESSION['user'])) {
    echo '<a href="admin.php">Aller à l’administration</a> | <a href="deconnexion.php">Se déconnecter</a>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="styles.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>
        <form method="post" class="form" action="">
            <div class="form-control">
                <div class="mb-2">
                    <label>Login :</label>
                    <input type="text" name="login" required><br>
                </div>
                <div class="mb-2">
                    <label>Mot de passe :</label>
                    <input type="password" name="password" required><br>
                </div>
                <button type="submit" class="btn btn-success mt-3 btn-sm">Se connecter</button>
            </div>
        </form>
        <?php if (isset($_GET['msg'])): ?>
            <span id="message" class="alert alert-danger mt-3"><?= htmlspecialchars($_GET['msg']) ?></span>

            <script>
            setTimeout(function() {
                var message = document.getElementById('message');
                if (message) {
                    message.style.display = 'none';
                }
            }, 3000); 
            </script>
        <?php endif; ?>
    </body>

</html>