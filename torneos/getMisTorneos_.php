<?php
include_once '../php/consultasTorneos.php';
session_start();
$torneos = get_MisTorneos($_SESSION['idUsuario']);
//var_dump($usuarios);
echo json_encode($torneos);
?>
