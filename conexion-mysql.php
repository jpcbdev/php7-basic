<?php
include "conexion.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conexion PHP con MySQL</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        form {
            width: 40em;
            display: flex;
            flex-direction: column;
        }

        .container {
            display: flex;
            justify-content: center;
            background-color: teal;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <input type="text" placeholder="Cedula" name="dni">
        <input type="text" placeholder="Nombre" name="name">
        <input type="text" placeholder="Apellido" name="surname">
        <input type="submit" value="Agregar nuevo usuario" name="create">
        <div class="container">
            <input type="submit" value="Eliminar por id" name="delete">
            <input type="text" placeholder="Ingrese el id (Eliminar)" name="deleteId">
        </div>
        <div class="container">
            <input type="submit" value="Modificar por id" name="update">
            <input type="text" placeholder="Ingrese el id (Modificar)" name="updateId">
        </div>
        <div class="container">
            <input type="submit" value="Obtener lista de usuarios" name="getUsers">
        </div>
    </form>
    <?php
    // ? Si existen los campos enviados desde el formulario
    if (isset($_POST['dni']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['create']) && $_POST['create'] == true) {
        // *Usando un archivo aparte para esta accion 
        require_once "./agregar-usuario.php";
    } else if (isset($_POST['delete']) && isset($_POST['deleteId']) && $_POST['delete'] == true) {
        require_once "./eliminar-usuario.php";
    } else if (isset($_POST['update']) && isset($_POST['updateId']) && $_POST['update'] == true) {
        require_once "./modificar-usuario.php";
    } else if (isset($_POST['getUsers']) && $_POST['getUsers'] == true) {
        require_once "./obtener-lista-usuarios.php";
    }
    ?>
</body>

</html>