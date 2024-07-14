<?php helper('form'); ?>

<?php if($error): ?>
<br><center><div class="alert alert-danger w-25"><h4 class="error"><strong>Hibásan kitöltve!</strong><br><?= $error ?></h4></div></center><br>
<?php endif; ?>

<?=view('contactcontent')?>
<?=form_open(base_url('contact'))?>


<div class="contain">
	
	<main><section><div class="w-100">
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
<?= form_close() ?>
		</div></section>
</main>

<aside><a id="Phone"></a>
	<div class="contain2">
	<section>
		<h3>Telefonszám:</h3>
	<h4><i class="fa-sharp fa-solid fa-phone"></i> +36706340810</h4>
	</section>
	<a id="contact"></a>
	<section>
	<h3>Személyesen itt megtalálsz:</h3>
	<h4>6723. Szeged, Retek u. 19.</h4><br>
	<iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.152176849661!2d20.15817507631811!3d46.26707997109846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744881ad4ef94cd%3A0x3dead8ca68082462!2sSzeged%2C%20Retek%20u.%2019%2C%206723!5e0!3m2!1shu!2shu!4v1720358676474!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section></div></aside></div>