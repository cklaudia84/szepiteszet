<center><table id="services" class="table table-striped table-bordered table-hover table-condensed w-75">  
	<tr>
		<th>Név</th>
		<th>E-mail cím</th>
		<th>Telefonszám</th>
		<th>Tárgy</th>
		<th>Üzenet</th>
		<th>Üzenet ideje</th>
		<th>Válaszolva</th>
		<th></th>
	</tr>
	
	<?php foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo $contact['name']; ?></td>
		<td><?php echo $contact['email']; ?></td>
		<td><?php echo $contact['phone']; ?></td>
		<td><?php echo $contact['subject']; ?></td>
		<td><?php echo $contact['message']; ?></td>
		<td><?php echo $contact['date']; ?></td>
		
		<td>
			<?php if ($contact['answered'] === '1'): ?>
				<a href="<?= base_url('contacted/unanswered/'. $contact['id']) ?>" title="Visszavonás">
					<i class="fa-solid fa-check"></i>
				</a>
			<?php else: ?>
				<a href="<?= base_url('contacted/answered/'. $contact['id']) ?>" title="Megválaszolva">
					<i class="fa-solid fa-check" style="color: #bfbfbf;"></i>
				</a>
		</td>
			<?php endif; ?>
		
		<td>
			<a href="<?= base_url('contacted/confirmDelete/'. $contact['id']) ?>" title="Törlés"><i class="fa-solid fa-trash"></i>
			</a>
		</td>
		
	</tr>

	<?php endforeach; ?>
		</table></center><br>