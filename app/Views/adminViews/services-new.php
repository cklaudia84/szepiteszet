<?php helper('form'); ?>
<div id="book">
	<center>
			<br><h1>Új szolgáltatás létrehozása</h1>
			<?= form_open(base_url('services/new')) ?>
		<div>	
			<?= form_label('Szolgáltatás típusa:', 'name') ?>
			<?= form_input('name', set_value('name'), ['id' => 'name', 'placeholder' => 'Gyantázás']) ?>	
		</div>
		<div>
			<?= form_label('Szolgáltatás megnevezése', 'type') ?>
			<?= form_input('type', set_value('type'), ['id' => 'type', 'placeholder' => 'Teljes láb']) ?>		
		</div>
		<div>
			<?= form_label('Szolgáltatás ára:', 'price') ?>
			<?= form_input('price', set_value('price'), ['id' => 'price', 'placeholder' => '10000']) ?>
		</div>	
		<?= form_submit('send', 'Küldés') ?>
		<?= form_close() ?>
	</center>
</div><br>