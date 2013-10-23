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