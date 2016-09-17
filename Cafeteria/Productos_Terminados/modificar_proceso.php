<?php

	include("conexion.php");

	$id = $_REQUEST['id'];
	$producto = $_POST['producto'];
	$cantidad = $_POST['cantidad'];
	$precio = $_POST['precio'];
	$fecha = $_POST['fecha'];

	$query = "UPDATE productos_terminados SET producto='$producto',cantidad='$cantidad',precio='$precio', fecha='$fecha' WHERE id='$id'";

	$resultado = $conexion->query($query);

	if($resultado) {
		header("Location: tabla.php");
	}
	else {
		echo "Insercion fallida";
	}

?>