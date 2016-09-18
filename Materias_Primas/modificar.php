<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Materias Primas</title>
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
					<li><a href="../Productos_Terminados/tabla.php" class="especial">Productos Terminados</a></li>
				</ul>
			</nav>
		</header>
		<section class="contenido">	
			<h1>Materias Primas</h1>

			<?php
				$id = $_REQUEST['id'];

				include("conexion.php");

				$query = "SELECT * FROM materias_primas WHERE id='$id'";
				$resultado = $conexion->query($query);

				$row = $resultado->fetch_assoc();
			?>
			
			<form action="modificar_proceso.php?id=<?php echo $row['id'] ?>" method="POST">
				<input type="text" name="producto" placeholder="Producto" value="<?php echo $row['producto']; ?>" onKeyPress="return soloLetras(event)" required>
				<input type="text" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad']; ?>" onKeyPress="return soloNumeros(event)" required>
				<select name="unidades"> 
					<option value="kg" <?php if ($row['unidad'] == "kg") {echo "selected";} ?>>kg</option> 
					<option value="g" <?php if ($row['unidad'] == "g") {echo "selected";} ?>>g</option> 
					<option value="litros" <?php if ($row['unidad'] == "litros") {echo "selected";} ?>>litros</option> 
				</select> 
				<input type="text" name="stock" placeholder="Stock mínimo" value="<?php echo $row['stock']; ?>" onKeyPress="return soloNumeros(event)" required>
				<input type="submit" value="Aceptar">
			</form>
		</section>
	</section>
</body>
</html>