<?php helper('form') ?>
<?= form_open(base_url('login')) ?>
<div>
	<?=form_label('Felhasználó név', 'user') ?>
	<?=form_input('user', set_value('user'), ['id' => 'user']) ?>
</div>
<div>				
	<?= form_label('Jelszó', 'pass') ?>
	<?=	form_input('pass', set_value('pass'), ['id' => 'pass'], 'password') ?>
</div>
<div>
	<?= form_submit('send', 'Küldés') ?>
</div>	
<?= form_close() ?>
