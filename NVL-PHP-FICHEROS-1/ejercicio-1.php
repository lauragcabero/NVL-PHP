<?php
$abrirFichero = fopen("el_quijote.txt", "r");

$contador = 0;
while (($contenido = fgets($abrirFichero)) !== false) {
    $extraigoPalabra = substr_count($contenido, 'MOLINO');
    $pasoAMinuscula = strtolower($extraigoPalabra);
    $contador++;
}
echo "La palabra molino aparece: " . $contador . "veces";

?>