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
			<h1>Formulario Agregar Producto</h1>
		</div>
		<div id="wrapper">
			<?php echo form_open("panel/insertProducto"); ?>
				<label for="">Id Producto</label>
				<input type="text" name="id_producto" required>
				<br>
				<label for="">Modelo</label>
				<input type="text" name="modelo" required>
				<br>
				<label for="">Talle</label>
				<input type="text" name="talle" required>
				<br>
				<label for="">Tipo</label>
				<input type="text" name="tipo" required>
				<br>
				<label for="">Color</label>
				<input type="text" name="color" required>
				<br>
				<label for="">Precio</label>
				<input type="text" name="precio" required>
				<br>
				<label for="">CodGen</label>
				<input type="text" name="codgen" required>
				<br>
				<label for="">Stock</label>
				<input type="text" name="stock" required>
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