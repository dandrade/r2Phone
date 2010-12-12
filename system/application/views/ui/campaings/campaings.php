<hr />

<h1>Camapa&ntilde;as</h1>
<table class="normal tablesorter fullwidth">
	<thead>
		<tr>
			<th>Campa&ntilde;a Seleccionada</th>
			<th>Campa&ntilde;a</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($campaings as $camp)
		{
		?>
		<tr class="odd">
			<td>
				<input type="checkbox" class="iphone" <?php if($campaing_selected->camp == $camp->list_id) { ?> checked <?php } ?> />
			</td>
			<td><?=$camp->list_name;?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
