<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
	<link rel="stylesheet" href="css/estilos_index.css">
	<link rel="stylesheet" href="css/estilos_fondo.css">

	<style>
		form input[name="productos_terminados"] {
			padding: 10px 100px;
		}

		form input[name="productos_terminados"]:hover {
			padding: 7px 100px;
		}
	</style>
</head>
<body>
	<section class="main">
		<section class="contenido">
			<h1>Bienvenido</h1>

			<form action="botones.php" method="POST">
				<input type="submit" name="materias_primas" value="Materias Primas"/>
				<input type="submit" name="productos_terminados" value="Productos Terminados" />
			</form>
		</section>
	</section>
</body>
</html>