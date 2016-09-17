<?php

	include("conexion.php");

	$producto = $_POST['producto'];
	$cantidad = $_POST['cantidad'];
	$precio = $_POST['precio'];
	$fecha = $_POST['fecha'];

	$query = "INSERT INTO productos_terminados(producto,cantidad,precio,fecha) VALUES ('$producto','$cantidad','$precio','$fecha')";

	$resultado = $conexion->query($query);

	if($resultado) {
		header("Location: tabla.php");
	}
	else {
		echo "Insercion fallida";
	}

?>