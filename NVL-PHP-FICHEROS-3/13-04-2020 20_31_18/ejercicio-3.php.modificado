<?php
function reemplazar($fichero)
{
    if (file_exists($fichero)) {
        date_default_timezone_set('Europe/Madrid');
        $fecha = date("d-m-Y H_i_s");
        mkdir($fecha);
        $nombreCarpeta = $fecha;
        $archivoDestino = $fichero . ".modificado";
        copy($fichero, $nombreCarpeta."/".$archivoDestino);
    } else {
        "El fichero" . $fichero . "no existe";
    }
}

reemplazar('./ejercicio-3.php');
