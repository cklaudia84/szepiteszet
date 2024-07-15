<center><table id="services" class="table table-striped table-bordered table-hover table-condensed w-75">  
	<tr>
		<th>Foglalás száma</th>
		<th>Foglalás kelte</th>
		<th>Név</th>
		<th>E-mail</th>
		<th>Telefonszám</th>
		<th>Szolgáltatás típusa</th>
		<th>Szolgáltatás megnevezése</th>
		<th>Választott dátum</th>
		<th>Választott időpont</th>
		<th></th>
		<th></th>
		
			
	</tr>
	
	<?php foreach ($appointments as $appointment): ?>
	<tr>
		<td><?= $appointment['id']; ?></td>
		<td><?= $appointment['actual_time']; ?></td>
		<td><?= $appointment['name'] ?></td>
		<td><?= $appointment['email'] ?></td>
		<td><?= $appointment['phone'] ?></td>
		<td><?= $appointment['service_type'] ?></td>
		<td><?= $appointment['service_name'] ?></td>
		<td><?= $appointment['date'] ?></td>
		<td><?= $appointment['time'] ?></td>
		<td><a href="<?= base_url('booked/edit/'. $appointment['id']) ?>" title="Szerkesztés"><i class="fa-solid fa-pen"></i></a></td>
		<td><a href="<?= base_url('booked/confirmDelete/' . $appointment['id']) ?>" title="Törlés"><i class="fa-solid fa-trash"></i></a></td>
	</tr>

	<?php endforeach; ?>
	</table></center><br>

