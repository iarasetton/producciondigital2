<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];

include("conexion.php");

mysqli_query($conexion, "INSERT INTO enviar VALUES (DEFAULT,'$nombre','$apellido', '$mail','$tel','$mensaje')");

header("Location: ../contacto.php?ok");
?>