<?php
function cuentaLetrasA($palabra, $letra) {
    $toArray=str_split($palabra);
    $toMayuscula=strtoupper($palabra);
    $toMayLetra=strtoupper($letra);

    $j=0;
    for ($i=0; $i<=strlen($toMayuscula); $i++) {
        if($toMayuscula[$i]==$toMayLetra) {
            $j++;
        }
    }
    echo $palabra . "Tiene: " . $j . " letras $letra";
}

cuentaLetrasA("Upgrade Hub", "u");
?>