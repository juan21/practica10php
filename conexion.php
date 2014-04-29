<?php
$enlace = mysqli_connect('127.0.0.1', 'root', '', 'registros');
if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_error() . ') '
            . mysqli_connect_error());
}
?>