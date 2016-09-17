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

			<form action="operacion_guardar.php" method="POST">
				<input type="text" name="producto" placeholder="Producto" onKeyPress="return soloLetras(event)" required />
				<input type="text" name="cantidad" placeholder="Cantidad" onKeyPress="return soloNumeros(event)" required />
				<select name="unidades" required> 
					<option value="">Escoge una unidad</option> 
					<option value="kg">kg</option> 
					<option value="g">g</option> 
					<option value="litros">litros</option> 
				</select> 
				<input type="text" name="stock" placeholder="Stock mínimo" onKeyPress="return soloNumeros(event)" required />
				<input type="submit" value="Aceptar" />
			</form>
		</section>
	</section>
</body>
</html>