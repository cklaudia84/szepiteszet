<?php 
$services = 
[
	'Arckezelés' => ['Kiskezelés' => 'Kiskezelés', 'Nagykezelés' => 'Nagykezelés', 'Tini kezelés' => 'Tini kezelés', 'Tű nélküli mezoterápia' => 'Tű nélküli mezoterápia'],
	'Sminktetoválás' => ['Szemöldök' => 'Szemöldök', 'Szemhéj' => 'Szemhéj', 'Száj félsatír' => 'Száj félsatír', 'Teljes szájsatír' => 'Teljes szájsatír'],
	'Gyantázás' => ['Szemöldök' => 'Szemöldök', 'Hónalj' => 'Hónalj', 'Kar végig' => 'Kar végig', 'Láb végig' => 'Láb végig', 'Fazon' => 'Fazon', 'Teljes intim' => 'Teljes intim'],
	'Egyéb' => ['Smink' => 'Smink', 'Szempilla festés' => 'Szempilla festés', 'Szemöldök festés' => 'Szemöldök festés']
];
?>

<?php helper('form'); ?>
<div id="book">
	<center><br>
		<h2>Foglalás szerkesztése</h2>
		<?= form_open(base_url('booked/edit/' . $appointment['id'])) ?>
        <div>
            <label>Név</label>
            <?= form_input('name', set_value('name', $appointment['name'])) ?>
        </div>
        <div>
            <label>E-mail</label>
            <?= form_input('email', set_value('email', $appointment['email'])) ?>
        </div>
        <div>
            <label>Telefonszám</label>
            <?= form_input('phone', set_value('phone', $appointment['phone'])) ?>
        </div>
        <div>
            <label>Szolgáltatás típusa</label>
            <?= form_dropdown('service_type', ['' => $appointment['service_type']] + array_combine(array_keys($services), array_keys($services)), set_value('service_type', $appointment['service_type']), ['id' => 'service_type', 'data-services' => htmlspecialchars(json_encode($services), ENT_QUOTES, 'UTF-8')]) ?>
        </div>
        <div>
            <label>Szolgáltatás megnevezése</label>	
			<?= form_dropdown('service_name', ['' => $appointment['service_name']] + $services, set_value('service_name', $appointment['service_name']), ['id' => 'service_name']) ?>
         
        </div>
        <div>
            <label>Választott dátum</label>
			<?= form_input(['name' => 'date', 'type' => 'date'], set_value('date', $appointment['date'])) ?>
        </div>
        <div>
            <label>Választott időpont</label>
            <?= form_input(['name' => 'time', 'type' => 'time'], set_value('time', $appointment['time']), ['type' => 'time']) ?>
        </div>
        <div>
            <?= form_submit('send', 'Mentés') ?>
        </div>
    <?= form_close() ?>
	</center>
</div>