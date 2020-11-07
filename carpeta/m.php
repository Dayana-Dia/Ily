<?php
include (cnn.php);

$area1 = $_POST["area"];
$cod = $_POST["codigo"];
$paquete1 = $_POST["paquete"];

mysqli_select_insertar($insertar, $conexion) or die("Error al conectar una base de datos");
msqli_query("UPDATE estacia SET area ='$area1', paquete = '$paquete1' WHERE id = '$cod'");
echo "correcto";
