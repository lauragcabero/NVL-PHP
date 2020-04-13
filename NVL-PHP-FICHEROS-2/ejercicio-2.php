<?php
function reemplazar($ficheroAntiguo, $ficheroNuevo, $palabraAntigua, $palabraNueva) {
    $abrirFichero = fopen($ficheroAntiguo, 'r');
    $creoNuevoFichero= fopen($ficheroNuevo, 'w+');

    while(($contenido= fgets($abrirFichero)) !== false) {
        $reemplazoPalabra= str_replace($palabraAntigua, $palabraNueva, $contenido);
        $reemplazoNuevoFichero = fwrite($creoNuevoFichero, $reemplazoPalabra);
    }
    fclose($creoNuevoFichero);
}

reemplazar('el_quijote.txt', 'quijote-modificado.txt', 'Sancho', 'Laura');

?>