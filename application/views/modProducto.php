<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tabu Agenda Modificar</title>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Modificar Agenda</h1>
		</div>
		<div id="wrapper">
			<?php echo form_open("panel/updateProducto"); ?>
			<?php foreach($productos as $row): ?>
				<input type="hidden" name="id_producto" value="<?php echo $row->Id_producto; ?>">
				<label for="">Modelo</label>
				<input type="text" name="modelo" value="<?php echo $row->modelo; ?>" required>
				<br>
				<label for="">Talle</label>
				<input type="text" name="talle" value="<?php echo $row->talle; ?>" required>
				<br>
				<label for="">Tipo</label>
				<input type="text" name="tipo" value="<?php echo $row->tipo; ?>" required>
				<br>
				<label for="">Color</label>
				<input type="text" name="color" value="<?php echo $row->color; ?>" required>
				<br>
				<label for="">Precio</label>
				<input type="text" name="precio" value="<?php echo $row->precio; ?>" required>
				<br>
				<label for="">CodGen</label>
				<input type="text" name="codgen" value="<?php echo $row->codgen; ?>" required>
				<br>
				<label for="">Stock</label>
				<input type="text" name="stock" value="<?php echo $row->stock; ?>" required>
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