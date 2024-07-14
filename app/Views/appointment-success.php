<br><center><h2><strong>Kérésed rögzült!</strong></h2>
<h4>A rögzített adatok a következők:</h4> 
	<ul class="list-unstyled fs-5">
    <?php if (isset($_POST['name'])): ?>
        <li>Név: <?= htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') ?></li>
    <?php endif; ?>
    <?php if (isset($_POST['email'])): ?>
        <li>Email: <?= htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') ?></li>
    <?php endif; ?>
    <?php if (isset($_POST['phone'])): ?>
        <li>Telefon: <?= htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8') ?></li>
	 <?php endif; ?>	
	<?php if (isset($_POST['service_type'])): ?>
        <li>Szolgáltatás típusa: <?= htmlspecialchars($_POST['service_type'], ENT_QUOTES, 'UTF-8') ?></li>
    <?php endif; ?>
    <?php if (isset($_POST['service_name'])): ?>
        <li>Szolgáltatás megnevezése: <?= htmlspecialchars($_POST['service_name'], ENT_QUOTES, 'UTF-8') ?></li>
    <?php endif; ?>
    <?php if (isset($_POST['date'])): ?>
        <li>Dátum: <?= htmlspecialchars($_POST['date'], ENT_QUOTES, 'UTF-8') ?></li>
    <?php endif; ?>
	<?php if (isset($_POST['time'])): ?>
		<li>Időpont: <?= htmlspecialchars($_POST['time'], ENT_QUOTES, 'UTF-8') ?></li>
    <?php endif; ?>
</ul>
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
			<?= form_dropdown('subject', ['Információ' => 'Információ', 'Ajánlatkérés' => 'Ajánlatkérés', 'Lemondás' => 'Lemondás', 'Módosítás' => 'Módosítás'], set_value('subject', 0), ['id' => 'subject']) ?>
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
<?= form_close(); ?>
</div>

<br><button type="button" class="btn btn-outline-light btn-lg"><a href="<?= base_url() ?>">Vissza a főoldalra</a></button></center><br>