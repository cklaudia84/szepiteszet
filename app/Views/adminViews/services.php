<center><div class="w-75"><table id="services" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr>
			<th><h3>Szolgáltatás típusa<h3></th>
			<th><h3>Szolgáltatás megnevezése<h3></th>
			<th><h3>Ár<h3></th>
			<th></th>
			<th></th>
	</tr>
	</thead>
	<tbody>
	<ul>
		<?php foreach($services as $service) :?>
		<tr>
			<td><h4><?= $service['name'] ?></h4></td>
			<td><h4><?= $service['title'] ?></h4></td>
			<td><h4><?= $service['price'] = number_format($service['price'], 0, ".", " ") ?> Ft </h4></td>
			<td><a href="<?= base_url('services/edit/'. $service['id']) ?>" title="Szerkesztés"><i class="fa-solid fa-pen"></i></a></td>
			<td><a href="<?= base_url('services/confirmDelete/' . $service['id']) ?>" title="Törlés"><i class="fa-solid fa-trash"></i></a></td>
		</tr>
		<?php endforeach; ?>
	</ul>
	</tbody>
</table></div></center>
