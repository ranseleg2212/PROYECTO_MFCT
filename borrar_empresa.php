<?php
$conexion = mysqli_connect('localhost', 'root', '', 'proyecto_mfct') or die(mysqli_error($mysqli));
$id = $_REQUEST['id'];
$query = "DELETE FROM form_dos WHERE id_empresa=$id";
mysqli_query($conexion, $query);
header("location:ver_empresas.php");
?>