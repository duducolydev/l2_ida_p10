<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Upload de fichier</title>
</head>
<body>
    <h2>Uploader un fichier</h2>
    <form action="upload_script.php" method="post" enctype="multipart/form-data">
        <label for="mon_fichier">Choisir un fichier :</label>
        <input type="file" name="mon_fichier" id="mon_fichier" accept=".jpg,.jpeg,.png,.gif,.pdf" required>

        <br><br>
        <input type="submit" value="Uploader">
    </form>
</body>
</html>
