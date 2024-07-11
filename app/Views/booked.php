<table>  
	<tr>
		<th>Név</th>
		<th>E-mail</th>
		<th>Telefonszám</th>
		<th>Szolgáltatás típusa</th>
		<th>Szolgáltatás megnevezése</th>
		<th>Dátum</th>
		<th>Időpont</th>
	</tr>
	<?php foreach ($appointments as $appointment): ?>
	<tr>
		<td><?php echo $appointment['name']; ?></td>
		<td><?php echo $appointment['email']; ?></td>
		<td><?php echo $appointment['phone']; ?></td>
		<td><?php echo $appointment['service-type']; ?></td>
		<td><?php echo $appointment['service-name']; ?></td>
		<td><?php echo $appointment['date']; ?></td>
		<td><?php echo $appointment['time']; ?></td>
	</tr>

	<?php endforeach; ?>
</table>

