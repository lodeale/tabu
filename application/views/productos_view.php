<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema Tabu</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.1.js"></script>
	<script type="text/javascript">
	function buscarCliente(){
		//console.log($('#bus').val());
		var param={

			"bus": $('#bus').val()
		}
		$.ajax({
			data: param,
			type: 'post',
			url: "<?php echo base_url('panel/searchProducto') ?>",
			success: function(response){
				$("#tablaCliente").html(response);
			}
		});
	}
	</script>
</head>
<body>
	<div id="container">
		<div id="header">

			<h1>Panel Productos</h1>
			<div id="nav">
				<ul>
					<li><a href="<?php echo base_url(); ?>panel/agregarProducto">Agregar Producto</a></li>
				</ul>
				<ul>
					<li><a href="http://localhost/barcodegen/html/BCGcode39.php">Generar Codigo</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo base_url(); ?>panel/">Atras</a></li>
				</ul>
				<div id="buscar">
					<?php echo form_open('panel/') ?>
						<label for="">Buscar</label>
						<input type="search" onkeyPress="buscarCliente();" id="bus" name="bus" required>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
		<div id="wrapper">
		<div id="tablaCliente">
			<table border=1>
				<tr>
					<th>IDPro</th>
					<th>Modelo</th>
					<th>Talle</th>
					<th>Tipo</th>
					<th>Color</th>
					<th>Precio</th>
					<th>CodGen</th>
					<th>Stock</th>
					<th>AMB</th>
				</tr>
		<?php foreach($productos as $row): ?>
				<tr>
					<td><?php echo $row->Id_producto; ?></td>
					<td><?php echo $row->modelo; ?></td>
					<td><?php echo $row->talle; ?></td>
					<td><?php echo $row->tipo; ?></td>
					<td><?php echo $row->color; ?></td>
					<td><?php echo $row->precio; ?></td>
					<td><?php echo $row->codgen; ?></td>
					<td><?php echo $row->stock; ?></td>
					<td>
						<a href="<?php echo base_url(); ?>panel/modCliente/<?php echo $row->Id_producto ?>">Modificar</a>
						<a href="<?php echo base_url(); ?>panel/delCliente/<?php echo $row->Id_producto ?>">Eliminar</a>
					</td>
				</tr>
		<?php endforeach; ?>
			</table>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>