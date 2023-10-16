<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
<?php
echo"Perulangan For untuk bilangan genap dari 1 hingga 10</br>";
for ($x = 2; $x <= 10; $x += 2) {
    echo $x . "</br></br>";
}

echo"Perulangan While untuk bilangan ganjil dari 1 hingga 10</br>";
$y = 1;
while ($y <= 10) {
    echo $y . "</br></br>";
    $y += 2;
}

echo"Perulangan Do-While untuk bilangan prima kurang dari 20</br>";
$z = 2;

do {
    $prima = true;

    for ($i = 2; $i <= sqrt($z); $i++) {
        if ($z % $i === 0) { 
            $prima = false; 
            break;
        }
    }

    if ($prima && $z < 20) {
        echo $z . "</br></br>";
    }

    $z++;
} while ($z < 20);

?>


</body>
</html>