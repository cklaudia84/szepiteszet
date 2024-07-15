<?php helper('form'); ?>
<div id="book">
	<center>
			<br><h1>Szolgáltatás módosítása</h1>
			<?= form_open(base_url('services/edit/' . $service['id'])) ?>
		<div>	
			<?= form_label('Szolgáltatás típusa:', 'name') ?>
			<?= form_input('name', set_value('name', $service['name'])) ?>
		</div>
		<div>
			<?= form_label('Szolgáltatás megnevezése', 'title') ?>
			<?= form_input('title', set_value('title', $service['title'])) ?>
		</div>
		<div>
			<?= form_label('Szolgáltatás ára:', 'price') ?>
			<?= form_input('price', set_value('price', $service['price'])) ?>
		</div>	
		<?= form_submit('send', 'Küldés') ?>
		<?= form_close() ?>
	</center>
</div><br>

