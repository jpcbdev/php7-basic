<?php

$dni = $_POST['dni'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$updateId = $_POST['updateId'];

$res = $mysqli->query("update usuario set cedula='$dni', nombre='$name', apellido='$surname' where id='$updateId'");

if ($res == true) {
    echo "Datos modificados";
} else {
    echo "No se pudo modificar el dato";
}
