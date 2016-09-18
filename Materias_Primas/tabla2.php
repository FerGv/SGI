<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla</title>
	<link rel="stylesheet" href="../css/estilos_tabla.css">
	<link rel="stylesheet" href="../css/estilos_menu.css">
	<link rel="stylesheet" href="../css/estilos_fondo.css">
	<link rel="stylesheet" href="../css/fonts/iconos.css">
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
			<table>
				<thead>
					<tr>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Stock mínimo</th>
						<th>Sobrante</th>
						<th class="opcion">Modificar</th>
						<th class="opcion">Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php

						include("conexion.php");
						$producto = $_REQUEST['producto'];

						$query = "SELECT * FROM materias_primas WHERE producto='$producto'";
						$resultado = $conexion->query($query);

						while($row = $resultado->fetch_assoc()){

							$id = $row['id'];
							$cantidad = $row['cantidad'];
							$stock = $row['stock'];
							$unidad = $row['unidad'];
							$sobrante = $row['cantidad'] - $row['stock'];

							if ($sobrante <= 0 ) {
								echo '<tr class="rojo">'."\n";
							}
							else {
								echo '<tr>'."\n";
							}

							echo '<td>'.$producto.'</td>'."\n";
							echo '<td>'.$cantidad.' '.$unidad.'</td>'."\n";
							echo '<td>'.$stock.' '.$unidad.'</td>'."\n";
							echo '<td>'.$sobrante.' '.$unidad.'</td>'."\n";
							echo "<td><a href=\"modificar2.php?id=$id\"><span class=\"icon-pencil  link\"></span></a></td>\n";
							echo "<td><a onClick=\"Mensaje($id, '$producto')\" href=\"#\"><span class=\"icon-bin2 link\"></span></a></td>\n";
							echo '</tr>'."\n\n";
						}

					?>
				</tbody>
			</table>

			<br>
			
			<a href="tabla.php" class="volver">Volver</a>

			<br><br><br>

			<div id="oculto"></div>
		</section>
	</section>

	<script>
		function Mensaje(id, producto){
			document.getElementById("oculto").style.display = "block";
			document.getElementById("oculto").innerHTML = '<p>El elemento "' + producto + '" se eliminará</p>' +
			'<a href="eliminar.php?id=' + id + '">Si</a>' +
			'<a onClick="Ocultar()" href="#">No</a>';
		}

		function Ocultar(){
			document.getElementById("oculto").style.display = "none";
		}

	</script>
</body>
</html>