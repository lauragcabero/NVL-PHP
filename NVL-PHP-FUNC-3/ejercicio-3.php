<?php
function contieneTodasLasVocales($palabra) {
    $aArray=str_split($palabra);
    $aMinusculas= strtolower($aArray);
    $vocales=['a', 'e', 'i', 'o', 'u'];

    if(in_array($vocales[0], $aArray) && in_array($vocales[1], $aArray) && in_array($vocales[2], $aArray) && in_array($vocales[3], $aArray) && in_array($vocales[4], $aArray)) {
        echo "true " . "LA PALABRA CONTIENE LAS 5 VOCALES";
    } else {
        echo "false " . "NO CONTIENE TODAS LAS VOCALES";
    }
}
    contieneTodasLasVocales('Murcielago');
?>
