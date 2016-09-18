<?php

	include("conexion.php");

	$producto = $_POST['producto'];
	$cantidad = $_POST['cantidad'];
	$stock = $_POST['stock'];
	$unidad = $_POST['unidades'];

	$query = "INSERT INTO materias_primas(producto,cantidad,stock,unidad) VALUES ('$producto','$cantidad','$stock','$unidad')";

	$resultado = $conexion->query($query);

	if($resultado) {
		header("Location: tabla.php");
	}
	else {
		echo "Insercion fallida";
	}

?>