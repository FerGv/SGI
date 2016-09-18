<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos terminados</title>
	<link rel="stylesheet" href="../css/estilos_formulario.css">
	<link rel="stylesheet" href="../css/estilos_menu.css">
	<link rel="stylesheet" href="../css/estilos_fondo.css">
	<script src="../js/funciones.js"></script>
</head>
<body>
	<section class="main">
		<header>
			<nav>
				<ul>
					<li><a href="formulario.php">Agregar</a></li>
					<li><a href="tabla.php">Consultar</a></li>
					<li><a href="../Materias_Primas/tabla.php" class="especial">Materias Primas</a></li>
				</ul>
			</nav>
		</header>
		<section class="contenido">	
			<h1>Productos Terminados</h1>

			<?php
				$id = $_REQUEST['id'];

				include("conexion.php");

				$query = "SELECT * FROM productos_terminados WHERE id='$id'";
				$resultado = $conexion->query($query);

				$row = $resultado->fetch_assoc();
			?>
			
			<form action="modificar_proceso.php?id=<?php echo $row['id'] ?>" method="POST">
				<input type="text" name="producto" placeholder="Producto" value="<?php echo $row['producto']; ?>" onKeyPress="return soloLetras(event)" required>
				<input type="text" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']; ?>" onKeyPress="return soloNumeros(event)" required>
				<input type="text" name="precio" placeholder="Precio" value="<?php echo $row['precio']; ?>" onKeyPress="return soloNumeros(event)" required>
				<input type="date" name="fecha" value="<?php echo $row['fecha']; ?>" required />
				<input type="submit" value="Aceptar">
			</form>
		</section>
	</section>
</body>
</html>