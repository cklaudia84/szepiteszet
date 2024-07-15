<center>
	<div class="w-75">
		<table id="services" class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th><h3>Szolgáltatás típusa<h3></th>
					<th><h3>Szolgáltatás megnevezése<h3></th>
					<th><h3>Ár<h3></th>
				</tr>
			</thead>
			<tbody>
				<ul>
					<?php foreach($services as $service) :?>
					<tr>
						<td><h4><?= $service['name'] ?></h4></td>
						<td><h4><?= $service['title'] ?></h4></td>
						<td><h4><?= $service['price'] = number_format($service['price'], 0, ".", " ") ?> Ft </h4></td>
					</tr>
					<?php endforeach; ?>
				</ul>
			</tbody>
		</table>	
	</div>
</center>
