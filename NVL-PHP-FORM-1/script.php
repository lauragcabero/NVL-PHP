<?php

$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];

if ($password === $confirmPassword && (strlen($password) >= 8) && strlen($confirmPassword) >= 8) {
    echo "Datos procesados correctamente";
} else {
    echo "Error en el formulario";
}
