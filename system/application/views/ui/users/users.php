		<hr />
		
		<h1>Usuarios</h1>
		<table class="normal tablesorter fullwidth">
			<thead>
				<tr>
					<th>Nombre Completo</th>
					<th>Email</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($users as $user)
				{
				?>
				<tr class="odd">
					<td><?=$user->name;?></td>
					<td><?=$user->username;?></td>
					<td>
						<a href="#" title="Editar este Usuario" class="tooltip table_icon">
							<img src="<?=base_url();?>assets/icons/actions_small/Pencil.png" alt="" />
						</a> 
						<a href="#" title="Eliminar este Usuario" class="tooltip table_icon">
							<img src="<?=base_url();?>assets/icons/actions_small/Trash.png" alt="" />
						</a>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	