<?php
include 'cnn.php';

$nombre = $_POST["nombre"];
$color = $_POST["color"];
$correo = $_POST["correo"];
$material = $_POST["material"];
$cantidad = $_POST["cantidad"];


$insertar = "INSERT INTO  pulseras( nombre, color, correo, material, cantidad) VALUES ('$nombre', '$color', '$correo', '$material', '$cantidad')";

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