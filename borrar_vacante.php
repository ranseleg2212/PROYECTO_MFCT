<?php
$conexion = mysqli_connect('localhost', 'root', '', 'proyecto_mfct') or die(mysqli_error($mysqli));
$id = $_REQUEST['id'];
$query = "DELETE FROM form_tres WHERE id=$id";
mysqli_query($conexion, $query);
header("location:ver_vacantes.php");
?>