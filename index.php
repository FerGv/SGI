<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/estilos_index.css">
	<link rel="stylesheet" href="css/estilos_fondo.css">
	<link rel="stylesheet" href="css/fonts/iconos.css">

	<?php  

		$user = isset($_POST['user']) ? $_POST['user'] : null;
		$pass = isset($_POST['pass']) ? $_POST['pass'] : null;

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if(($user == "Admin") && ($pass == "123")) {
				header('Location: bienvenido.php');
      			exit;
			}
			else {
				echo "<script>alert('Datos incorrectos')</script>";
			}
		}

	?>
</head>
<body>
	<section class="main">
		<section class="contenido">
			<h1>Login</h1>
			
			<form action="index.php" method="POST">
				<input type="text" name="user" placeholder="Usuario" required />
				<input type="password" name="pass" placeholder="Contraseña" required />
				<input type="submit" value="Aceptar" class="inicio"/>
			</form>
		</section>
	</section>
</body>
</html>