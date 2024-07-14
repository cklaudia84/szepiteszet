<center><table id="services" class="table table-striped table-bordered table-hover table-condensed w-75">  
	<tr>
		<th>Név</th>
		<th>E-mail cím</th>
		<th>Telefonszám</th>
		<th>Tárgy</th>
		<th>Üzenet</th>
		<th>Üzenet ideje</th>
		<th>Megválaszolva</th>
		<th>Válaszolok</th>
		<th></th>
		<th><i class="fa-solid fa-check"></i></th>
	</tr>
	
	<?php foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo $contact['name']; ?></td>
		<td><?php echo $contact['email']; ?></td>
		<td><?php echo $contact['phone']; ?></td>
		<td><?php echo $contact['subject']; ?></td>
		<td><?php echo $contact['message']; ?></td>
		<td><?php echo $contact['date']; ?></td>
		<td><?php echo $contact['answered']; ?></td>
		<td><a href="<?= base_url('contacted/edit/'. $contact['id']) ?>" title="Válaszolok"><i class="fa-solid fa-pen"></i></a></td>
		<td><a href="<?= base_url('contacted/delete/'. $contact['id']) ?>" title="Törlés"><i class="fa-solid fa-trash"></i></a></td>
		<td></td>
	</tr>

	<?php endforeach; ?>
		</table></center><br>




