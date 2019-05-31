<?php

$res = $mysqli->query("SELECT * FROM usuario");

while ($busqueda = $res->fetch_object()) {
    echo "<br><h4>" . $busqueda->nombre . "</h4>";
    echo "<br><h4>" . $busqueda->apellido . "</h4>";
}
