<?php

$dni = $_POST['dni'];
$name = $_POST['name'];
$surname = $_POST['surname'];

$res = $mysqli->query("insert into usuario set cedula='$dni', nombre='$name', apellido='$surname'");

if ($res == true) {
    echo "Dato agregado";
} else {
    echo "No se pudo agregar el dato";
}