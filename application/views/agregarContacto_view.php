<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<div class="error">
			<?php  
				if(!empty($error)): 
					var_dump($error); 
				endif;
			?>
		</div>
	
	<div id="container">
		<div id="header">
			<h1>Agregar Contacto</h1>
		</div>
		<div id="wrapper">
			<?php echo form_open("panel/insertConctacto"); ?>
				<label for="">ID Cliente</label>
				<input type="text" name="id_cliente" required>
				<br>
				<label for="">Nombre de la Compañia</label>
				<input type="text" name="nomcompania" required>
				<br>
				<label for="">Nombre de Contacto</label>
				<input type="text" name="nomcontacto" required>
				<br>
				<label for="">Direccion de Facturacion</label>
				<input type="text" name="dirfacturacion" required>
				<br>
				<label for="">Ciudad</label>
				<input type="text" name="cuidad" required>
				<br>
				<label for="">Provincia</label>
				<input type="text" name="provincia" required>
				<br>
				<label for="">Codigo Postal</label>
				<input type="text" name="cp" required>
				<br>
				<label for="">Pais</label>
				<input type="text" name="pais" required>
				<br>
				<label for="">Titulo de Contacto</label>
				<input type="text" name="titcontacto" required>
				<br>
				<label for="">Numero de Telefono</label>
				<input type="text" name="nrotel" required>
				<br>
				<label for="">Numero de Celular</label>
				<input type="text" name="nrocel" required>
				<br>
				<!-- -------------------------------------	-->

				<?php if(!empty($upload_data)): ?>
					<img src="<?php echo base_url(); ?>uploads/<?php echo $upload_data['file_name'] ?>">
					<input type="text" name="img" id="img" value="<?php echo $upload_data['file_name'] ?>">
				<?php endif; ?>

				<!-- -------------------------------------	-->
							<br /><br />
			<input type="submit" value="Cargar" />
		</form>
		<!--
		<?php echo form_open_multipart('panel/do_upload');?>
			<input type="file" name="userfile" />
			<input type="submit" value="subir archivo">
			-->
		<?php form_close(); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>