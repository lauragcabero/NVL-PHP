<?php
function cuentaLetrasA($palabra) {
    $j=0;
    for ($i=0; $i<=strlen($palabra); $i++) {
        if($palabra[$i]=='a') {
            $j++;
        }
    }
    echo "Tiene letras A: " . $j;
}

cuentaLetrasA("Upgrade Hub");
?>