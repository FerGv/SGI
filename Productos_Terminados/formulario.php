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

			<form action="operacion_guardar.php" method="POST">
				<input type="text" name="producto" placeholder="Producto" onKeyPress="return soloLetras(event)" required />
				<input type="text" name="cantidad" placeholder="Cantidad" onKeyPress="return soloNumeros(event)" required />
				<input type="text" name="precio" placeholder="Precio" onKeyPress="return soloNumeros(event)" required />
				<input type="date" name="fecha" required />
				<input type="submit" value="Aceptar" />
			</form>
		</section>
	</section>
</body>
</html>