<?php
include 'cnn.php';

$nombre = $_POST["area"];
$color = $_POST["paquetes"];
$correo = $_POST["correo"];
$material = $_POST["personas"];
$dias = $_POST["dias"];

$insertar = "INSERT INTO  estancia( area, paquete, email, personas, dias) VALUES ('$nombre', '$color', '$correo', '$material', '$dias')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) 
{
	echo "Error al registrarse";
}
else 
{
	echo "Registro realizado";
}
mysqli_close($conexion);