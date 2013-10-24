<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tabu Agenda</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.1.js"></script>
	<script type="text/javascript">
	function registrarProd(){
		var param={
			"prod": $('#prod').val()
		}


		$.ajax({
			data: param,
			type: 'post',
			url: "<?php echo base_url('panel/registrarProducto/'); ?>",
			success: function(response){
				$("#resultProduct").html(response);
			}
		});
	}

	function facturar(){
		$.ajax({
			type: 'post',
			url: "<?php echo base_url('panel/facturarProducto/'); ?>",
			success: function(response){
				$("#resultProduct").html(response);
			}
		});	
	}

	function clearFact(){
		
		$.ajax({
			type: 'post',
			url: "<?php echo base_url('panel/clearFactTemp'); ?>",
			success: function(response){
				$("#resultProduct").html(response);
			}
		});	
	}
	</script>
</head>
<body>
	<div id="container">
		<div id="header">

			<h1>Control de Stock</h1>
			<div id="nav">
				<ul>
					<li>
							<label for="">Cod. Producto</label>
							<input type="text" id="prod" name="prod" required>
							<input type="button" onclick="registrarProd();" name="btocheck" value="Registrar">
					</li>
				</ul>
				<ul>
					<li><a href="<?php echo base_url(); ?>panel/">Atras</a></li>
				</ul>
			</div>
		</div>
		<div id="wrapper">
		<div id="tablaCliente">
			<div id="resultProduct">
				<table border=1>
					<tr>
						<th>Modelo</th>
						<th>Talle</th>
						<th>Tipo</th>
						<th>Color</th>
						<th>Precio</th>
						<th>Codegen</th>
						<th>Unidad</th>
						<th>Opciones</th>
					</tr>
				</table>
			</div>
			<input type="button" onclick="facturar();" id="descStock" name="descStock" value="Facturar" >
			<input type="button" onclick="clearFact();" id="clearFact" name="clearFact" value="Limpiar" >
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>