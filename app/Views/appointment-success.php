<center><br><h2><strong>Kérésed rögzült!</strong></h2>
<h4>A rögzített adatok a következők: </h4>
<div class="w-75 p-3"><h3>Szeretettel várlak üzletemben a megadott időpontban!<br>Ha bármi kérdésed felmerülne, vagy szeretnéd lemondani illetve módosítani az időpontot, akkor kérlek vedd fel velem a kapcsolatot az alábbi űrlapon:</h3></div>

<?php helper('form'); ?>
<?=form_open(base_url('appointment-success'))?>

<div><br>
		<div>
			<?= form_label('Teljes név', 'name') ?>
			<?= form_input('name', set_value('name'), ['id' => 'name', 'placeholder' => 'Például: Boldog Ágota']) ?>
		</div>
		<div>
			<?= form_label('E-mail cím', 'email') ?>
			<?= form_input('email', set_value('email'), ['id' => 'email', 'placeholder' => 'Például: boldog@gmail.com', 'email']) ?>
		</div>
		<div>
			<?= form_label('Telefonszám', 'phone') ?>
			<?= form_input('phone', set_value('phone'), ['id' => 'phone', 'placeholder' => 'Például: +36301234567', 'phone']) ?>
		</div>
		<div>
			<?= form_label('Tárgy', 'subject') ?>
			<?= form_dropdown('subject', ['Információ', 'Ajánlatkérés', 'Lemondás', 'Módosítás'], set_value('subject', 0), ['id' => 'subject']) ?>
		</div>
		<div>
			<?= form_label('Üzenet szövege', 'message') ?>
			<?= form_textarea('message', set_value('message'), ['id' => 'message']) ?>
		</div>
	
	<div class="check">
		<?= form_checkbox('accept', 1, false, ['id' => 'accept']) ?>
		<?= form_label('Elfogadom az adatkezelési szabályzatot', 'accept') ?>
	</div>
<?= form_submit('send', 'Küldés') ?>
<?= form_close() ?>
</div>

<br><button type="button" class="btn btn-outline-light btn-lg"><a href="<?= base_url()?>">Vissza a főoldalra</a></button></center><br>
