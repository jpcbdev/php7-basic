<?php

$deleteId = $_POST['deleteId'];

$res = $mysqli->query("delete from usuario where id='$deleteId'");

if ($res == true) {
    echo "Dato eliminado";
} else {
    echo "No se pudo eliminar el dato";
}
