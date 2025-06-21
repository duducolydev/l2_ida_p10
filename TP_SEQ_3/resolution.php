<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <h2> Equation du second degré - Résolution </h2>
    <form action="" method="post" class="form form-control">
        <label for="a" class="form-label"> a : </label>
        <input lass="form-control" type="number" name="a" id="a">

        <label for="b" class="form-label"> b : </label>
        <input lass="form-control" type="number" name="b" id="b">

        <label for="c" class="form-label"> c : </label>
        <input lass="form-control" type="number" name="c" id="c">

        <input class="btn btn-danger" type="submit" name="submit" id="submit" value="Résoudre">
    </form>

    <?php
    function resoudre($a, $b, $c)
    {
        $delta = $b * $b - 4 * $a * $c;

        echo "Equation à résoudre : " . $a . "x² + " . $b . "x + " . $c . " = 0" . "<br>";
        echo "delta = " . $delta  . "<br>"; 
        if ($delta > 0) {
            $x1 = (-$b - sqrt($delta)) / 2 * $a;
            $x2 = (-$b + sqrt($delta)) / 2 * $a;

            echo "L'équation admet deux solutions réelles : x1 = " . $x1 . " et x2 = " . $x2  . "<br>";
        } elseif ($delta == 0) {
            $x0 = -$b / 2 * $a;
            echo "L'équation admet une solution réelle : x0 = " . $x0  . "<br>";
        } else {
            echo "L'équation n'admet pas de solution !"  . "<br>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if (((filter_var($a, FILTER_VALIDATE_INT) === 0 || !filter_var($a, FILTER_VALIDATE_INT) === false))
            && ((filter_var($a, FILTER_VALIDATE_INT) === 0 || !filter_var($a, FILTER_VALIDATE_INT) === false))
            && ((filter_var($a, FILTER_VALIDATE_INT) === 0 || !filter_var($a, FILTER_VALIDATE_INT) === false))
        ) {
            if ($a != 0) {
                resoudre($a, $b, $c);
            } else {
                echo "<p class='badge bg-warning'>Le coefficient a ne peut pas être nul !</p>";
            }
        } else {
            echo "<p class='badge bg-warning'>Veuillez bien saisir des entiers valides !</p>";
        }
    }

    ?>
</body>

</html>