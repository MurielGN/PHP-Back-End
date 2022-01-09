<h1>Gestionar categorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
	Crear categoria
</a>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>TOTAL VENDIDO</th>
		<th>STOCK</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$cat->id;?></td>
			<td><?=$cat->nombre;?></td>
			<td><?=$cat->totalSold;?></td>
		</tr>
	<?php endwhile; ?>
</table>
