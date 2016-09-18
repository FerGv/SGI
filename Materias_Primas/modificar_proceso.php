<?php

	include("conexion.php");

	$id = $_REQUEST['id'];
	$producto = $_POST['producto'];
	$cantidad = $_POST['cantidad'];
	$stock = $_POST['stock'];
	$unidad = $_POST['unidades'];

	$query = "UPDATE materias_primas SET producto='$producto',cantidad='$cantidad',stock='$stock',unidad='$unidad' WHERE id='$id'";

	$resultado = $conexion->query($query);

	if($resultado) {
		header("Location: tabla.php");
	}
	else {
		echo "Insercion fallida";
	}

?>