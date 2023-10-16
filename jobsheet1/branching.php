<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="POST">
        Masukkan nilai x: <input type="text" name="x">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];

        if ($x > 0) {
            echo "Nilai dari variabel x adalah bilangan positif";
        } elseif ($x < 0) {
            echo "Nilai dari variabel x adalah bilangan negatif";
        } else {
            echo "Nilai dari variabel x adalah nol";
        }
    }
    ?>

</body>
</html>
