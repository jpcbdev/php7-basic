<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    $numero1 = 3;
    $numero2 = 4;
    $numero3 = 1;
    $sumaPrimeros = $numero1 + $numero2;
    // ? Un plus :D
    $arregloFrutas = ["Manzana"];

    echo "La suma de los 2 primeros numeros es: " . $sumaPrimeros;
    echo "<br>";
    echo "La suma parcial de todos los numeros es: " . ($sumaPrimeros + $numero3);
    echo "<br>";
    // ? Un plus :D
    echo "La fruta en la primera posicion del arreglo de frutas es: " . $arregloFrutas[0];
    ?>

</body>

</html>