
<?php

$vacia = "";
$noExiste;

$entero = 12;
$decimal = 20.20;
$booleana = false;

if (!isset($noExiste)) {
    echo "La variable noExiste no existe";
}
echo "<br>";
if (empty($vacia)) {
    echo "La variable vacia esta vacia";
}
echo "<br>";

if (is_integer($entero)) {
    echo "La variable " . $entero . " es entera";
}
echo "<br>";

if (is_double($decimal)) {
    echo "La variable " . $decimal . " es decimal";
}
echo "<br>";

if (is_bool($booleana)) {
    echo "La variable " . $booleana . " es boleana";
}
