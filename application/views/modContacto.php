<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Formulario Modificar Producto</h1>
		</div>
		<div id="wrapper">
			<?php echo form_open("panel/updateContacto"); ?>
			<?php foreach($agendas as $row): ?>
				<input type="hidden" name="IdCli" value="<?php echo $row->IdCli; ?>">
				<label for="">ID Cliente</label>
				<input type="text" name="id_cliente" value="<?php echo $row->id_cliente; ?>" required>
				<br>
				<label for="">Nombre de la Compañia</label>
				<input type="text" name="nomcompania" value="<?php echo $row->nom_compania; ?>" required>
				<br>
				<label for="">Nombre de Contacto</label>
				<input type="text" name="nomcontacto" value="<?php echo $row->nom_contacto; ?>" required>
				<br>
				<label for="">Direccion de Facturacion</label>
				<input type="text" name="dirfacturacion" value="<?php echo $row->dir_fac; ?>" required>
				<br>
				<label for="">Ciudad</label>
				<input type="text" name="cuidad" value="<?php echo $row->cuidad; ?>" required>
				<br>
				<label for="">Provincia</label>
				<input type="text" name="provincia" value="<?php echo $row->provincia; ?>" required>
				<br>
				<label for="">Codigo Postal</label>
				<input type="text" name="cp" value="<?php echo $row->cod_pos; ?>" required>
				<br>
				<label for="">Pais</label>
				<input type="text" name="pais" value="<?php echo $row->pais; ?>" required>
				<br>
				<label for="">Titulo de Contacto</label>
				<input type="text" name="titcontacto" value="<?php echo $row->tit_contacto; ?>" required>
				<br>
				<label for="">Numero de Telefono</label>
				<input type="text" name="nrotel" value="<?php echo $row->nro_tel; ?>" required>
				<br>
				<label for="">Numero de Celular</label>
				<input type="text" name="nrocel" value="<?php echo $row->nro_cel; ?>" required>
				<br>
				
				<input type="submit" value="Enviar">
			<?php endforeach; ?>
			<?php echo form_close(); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>