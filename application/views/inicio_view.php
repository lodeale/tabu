<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/estilos.css" type="text/css">
</head>
<body>
	<div id="container">		
		<div id="containerLogin">
			<div id="formulario">
			<?php echo form_open("inicio/login"); ?>
			Usuarios: <input type="text" name="usuario"><br>
			Clave: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="clave"><br>
			<div id="btoEnviar"><input type="submit" value="Enviar" name="btoEnviar"></div>
			<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</body>
</html>