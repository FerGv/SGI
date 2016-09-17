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
					<li><a href="../Materias_Primas/tabla.php" class="especial">Materias Primas</a></li>
				</ul>
			</nav>
		</header>
		<section class="contenido">
			<h1>Productos Terminados</h1>

			<br>

			<form action="tabla2.php">
				<input type="search" name="producto" placeholder="Producto" id="buscar" required />
				<input type="submit" value="Buscar" id="submit" />
			</form>

			<br><br>
			
			<table>
				<thead>
					<tr>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Fecha de caducidad</th>
						<th class="opcion">Modificar</th>
						<th class="opcion">Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php

						include("conexion.php");
						$fecha_hoy = date("Y") . "-" . date("m") . "-" . date("d");

						$query = "SELECT * FROM productos_terminados WHERE fecha='$fecha_hoy' ORDER BY producto";
						$resultado = $conexion->query($query);

						while($row = $resultado->fetch_assoc()){
							$id = $row['id'];
							$producto = $row['producto'];
							$cantidad = $row['cantidad'];
							$precio = $row['precio'];
							$fecha = $row['fecha'];
					
							echo '<tr class="amarillo">'."\n";
							echo '<td>'.$producto.'</td>'."\n";
							echo '<td>'.$cantidad.' pz'.'</td>'."\n";
							echo '<td>'.'$'.$precio.'</td>'."\n";
							echo '<td>'.$fecha.'</td>'."\n";
							echo "<td><a href=\"modificar.php?id=$id\"><span class=\"icon-pencil  link\"></span></a></td>\n";
							echo "<td><a onClick=\"Mensaje($id, '$producto')\" href=\"#\"><span class=\"icon-bin2 link\"></span></a></td>\n";
							echo '</tr>'."\n\n";
						}

						$query = "SELECT * FROM productos_terminados WHERE fecha!='$fecha_hoy' ORDER BY producto";
						$resultado = $conexion->query($query);

						while($row = $resultado->fetch_assoc()){
							$id = $row['id'];
							$producto = $row['producto'];
							$cantidad = $row['cantidad'];
							$precio = $row['precio'];
							$fecha = $row['fecha'];
					
							echo '<tr class="verde">'."\n";
							echo '<td>'.$producto.'</td>'."\n";
							echo '<td>'.$cantidad.' pz'.'</td>'."\n";
							echo '<td>'.'$'.$precio.'</td>'."\n";
							echo '<td>'.$fecha.'</td>'."\n";
							echo "<td><a href=\"modificar.php?id=$id\"><span class=\"icon-pencil link blanco\"></span></a></td>\n";
							echo "<td><a onClick=\"Mensaje($id, '$producto')\" href=\"#\"><span class=\"icon-bin2 link blanco\"></span></a></td>\n";
							echo '</tr>'."\n\n";
						}
					?>
				</tbody>
			</table>

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