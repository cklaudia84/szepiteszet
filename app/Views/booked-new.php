<?php 
$services = 
[
	'Arckezelés' => ['Kiskezelés', 'Nagykezelés', 'Tini kezelés', 'Tű nélküli mezoterápia'],
	'Sminktetoválás' => ['Szemöldök', 'Szemhéj', 'Száj félsatír', 'Teljes szájsatír'],
	'Gyantázás' => ['Szemöldök', 'Hónalj', 'Kar végig', 'Láb végig', 'Fazon', 'Teljes intim'],
	'Egyéb' => ['Smink', 'Szempilla festés', 'Szemöldök festés']
];
?>

<?php helper('form'); ?>
<div id="book">
	<center>
			<br><h1>Új foglalás létrehozása</h1>
			<?= form_open(base_url('booked/new')) ?>
		<div>	
			<?= form_label('Teljes név:', 'name') ?>
			<?= form_input('name', set_value('name'), ['id' => 'name', 'placeholder' => 'Például: Tompa Erzsébet']) ?>	
		</div>
		<div>
			<?= form_label('E-mail cím:', 'email') ?>
			<?= form_input('email', set_value('email'), ['id' => 'email', 'placeholder' => 'Például: tompa@gmail.com', 'email']) ?>		
		</div>
		<div>
			<?= form_label('Telefonszám:', 'phone') ?>
			<?= form_input('phone', set_value('phone'), ['id' => 'phone', 'placeholder' => 'Például: +36301234567', 'phone']) ?>
		</div>
		<div>
			<?= form_label('Szolgáltatás típusa:', 'service_type') ?>
			<?= form_dropdown('service_type', ['' => '-- Választok --'] + array_combine(array_keys($services), array_keys($services)), set_value('service_type', ''), ['id' => 'service_type', 'data-services' => htmlspecialchars(json_encode($services), ENT_QUOTES, 'UTF-8')]) ?>

		</div>
		<div>
			<?= form_label('Szolgáltatás megnevezése:', 'service_name') ?>
			<?= form_dropdown('service_name', ['' ], '', ['id' => 'service_name']) ?>
		</div>
		<div>
			<label>Választott dátum</label>
			<?= form_input(['name' => 'date', 'type' => 'date'], set_value('date', '')) ?>
		</div>
		<div>
			<label>Választott időpont</label>
			<?= form_input(['name' => 'time', 'type' => 'time'], set_value('time'), ['type' => 'time']) ?>
		</div>		

		<?= form_submit('send', 'Küldés') ?>
		<?= form_close() ?>
	</center>
</div><br>


