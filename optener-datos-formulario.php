<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            display: flex;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 40em;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="" method="POST">
            <input type="text" placeholder="Nombre" name="name">
            <input type="email" placeholder="Email" name="email">
            <textarea name="message" ols="30" rows="10"></textarea>
            <select name="options" id="">
                <option value="guest" selected>Invitado</option>
                <option value="admin">Administrador</option>
            </select>
            <input type="submit" value="Enviar datos">
        </form>
    </div>

    <?php
    // ? Capturando los datos enviados desde el formulario
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['options'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $option = $_POST['options'];
        echo "<br>";
        echo "Nombre: " . $name;
        echo "<br>";
        echo "Email: " . $email;
        echo "<br>";
        echo "Mensaje: " . $message;
        echo "<br>";

        switch ($option) {
            case 'guest':
                echo "Invitado";
                break;
            case 'admin':
                echo "Administrador";
                break;
            default:
                # code...
                break;
        }
    }

    for ($i = 0; $i < 10; $i++) {
        echo $i;
        echo "<br>";
    }


    ?>
</body>

</html>