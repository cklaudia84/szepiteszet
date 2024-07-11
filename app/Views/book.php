<?php helper('form'); ?>

<?php if($error): ?>
<br><center><div class="alert alert-danger w-50"><h4 class="error"><strong>Hibásan kitöltve!</strong><br><?= $error ?></h4></div></center><br>
<?php endif; ?>

<?php 
$services = 
[
	'Arckezelés' => ['Kiskezelés', 'Nagykezelés', 'Tini kezelés', 'Tű nélküli mezoterápia'],
	'Sminktetoválás' => ['Szemöldök', 'Szemhéj', 'Száj félsatír', 'Teljes szájsatír'],
	'Gyantázás' => ['Szemöldök', 'Hónalj', 'Kar végig', 'Láb végig', 'Fazon', 'Teljes intim'],
	'Egyéb' => ['Smink', 'Szempilla festés', 'Szemöldök festés']
];
$times = ['09:00' => '09:00', '10:00' => '10:00', '11:00' => '11:00', '12:00' => '12:00', '13:00' => '13:00', '14:00' => '14:00', '15:00' => '15:00', '16:00' => '16:00'];

?>

<?=form_open()?>

<div>
	<div id="book">
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
			<?= form_label('Időpont kiválasztása:', 'time') ?>
			<?= form_dropdown('time', ['' => '-- Választok --'] + $times, set_value('time'), ['id' => 'time']) ?>
		</div>
		<div class="check">
			<?= form_checkbox('accept', 1, false, ['id' => 'accept']) ?>
			<?= form_label('Elfogadom az adatkezelési szabályzatot', 'accept') ?>
		</div>
		<?= form_hidden('date', '') ?> 
		<?= form_submit('send', 'Küldés') ?>
		<?= form_close() ?>
	</div>
</div>
