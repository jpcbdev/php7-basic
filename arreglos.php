<?php

$objetoPersona = array();
$objetoFrutas = array('primera' => "Manzana", 'segunda' => "Uva");

$objetoPersona["firstname"] = "Juanito";
$objetoPersona["surname"] = "Mendoza";
$objetoPersona["edad"] = "20";

echo $objetoPersona["edad"];

echo "<br>";

echo "La fruta en la segunda posicion es: " . $objetoFrutas["segunda"];

// * Mostramos el contenido e informacion del objeto usando var_dump

echo "<br>";

var_dump($objetoFrutas);