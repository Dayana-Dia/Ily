<?php
include 'cnn.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$edad = $_POST["edad"];
$cantidad = $_POST["cantidad"];
$fecha = $_POST["fecha"];

$insertar = "INSERT INTO boletos( nombre, apellidos, correo, edad, cantidad, fecha) VALUES ('$nombre', '$apellido', '$correo', '$edad', '$cantidad', '$fecha')";

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