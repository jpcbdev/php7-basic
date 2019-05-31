<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        .container {
            width: 40em;
        }

        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>

    <form action="" method="POST">
        <input type="number" placeholder="Numero 1" name="num1">
        <input type="number" placeholder="Numero 2" name="num2">
        <select name="option" id="">
            <option value="1" selected>Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <?php

    if (is_numeric($_POST['num1']) &&  is_numeric($_POST['num2']) && isset($_POST['option'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $option = $_POST['option'];

        switch ($option) {
            case 1:
                echo "La suma de los dos numeros es: " . ($num1 + $num2);
                break;
            case 2:
                echo "La resta de los dos numeros es: " . ($num1 - $num2);
                break;
            case 3:
                echo "La multiplicacion de los dos numeros es: " . ($num1 * $num2);
                break;
            case 4:
                echo "La division de los dos numeros es: " . ($num1 / $num2);
                break;
            default:
                echo "Opcion invalida";
                break;
        }
    }

    ?>
</body>

</html>