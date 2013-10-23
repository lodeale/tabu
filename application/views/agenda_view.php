<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tabu Agenda</title>
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
			url: "<?php echo base_url('panel/searchClient') ?>",
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

			<h1>Panel Agenda</h1>
			<div id="nav">
				<ul>
					<li><a href="<?php echo base_url(); ?>panel/agregarContacto">Agregar Contacto</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo base_url(); ?>panel/">Atras</a></li>
				</ul>
				<!-- http://fardel.zapto.org/
				<div id="buscar">
					<?php echo form_open('panel/') ?>
						<label for="">Buscar</label>
						<input type="search" onkeyPress="buscarCliente();" id="bus" name="bus" required>
					<?php echo form_close(); ?>
				</div>
				-->
			</div>
		</div>
		<div id="wrapper">
		<div id="tablaCliente">
			<table border=1>
				<tr>
					<th>IdCli</th>
					<th>ID Cliente</th>
					<th>Nombre de la Compañia</th>
					<th>Nombre de Contacto</th>
					<th>Direccion de Facturacion</th>
					<th>Ciudad</th>
					<th>Provincia</th>
					<th>Codigo Postal</th>
					<th>Pais</th>
					<th>Titulo de Contacto</th>
					<th>Numero de Telefono</th>
					<th>Numero de Celular</th>
				</tr>
		<?php foreach($agendas as $row): ?>
				<tr>
					<td><?php echo $row->IdCli; ?></td>
					<td><?php echo $row->id_cliente; ?></td>
					<td><?php echo $row->nom_compania; ?></td>
					<td><?php echo $row->nom_contacto; ?></td>
					<td><?php echo $row->dir_fac; ?></td>
					<td><?php echo $row->cuidad; ?></td>
					<td><?php echo $row->provincia; ?></td>
					<td><?php echo $row->cod_pos; ?></td>
					<td><?php echo $row->pais; ?></td>
					<td><?php echo $row->tit_contacto; ?></td>
					<td><?php echo $row->nro_tel; ?></td>
					<td><?php echo $row->nro_cel; ?></td>
					<td>
						<a href="<?php echo base_url(); ?>panel/modContacto/<?php echo $row->IdCli ?>">Modificar</a>
						<a href="<?php echo base_url(); ?>panel/delContacto/<?php echo $row->IdCli ?>">Eliminar</a>
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