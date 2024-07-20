<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Szépítészet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="<?= base_url('static/res/style.css') ?>">
</head>
<body>
	<header class="p-2">
        <br><center><h1 class="border-0 p-0 m-0">Szépítészet</h1></center>
		<nav>
			<div class="navadmin">	
				<ul class="border-bottom-0">
					<li><a href="<?= base_url()?>">Weboldalra</a></li>

					<li class="pt-5"><a href="<?= base_url('admin')?>">Főoldal</a></li>
					<li class="pt-5"><a href="<?= base_url('booked')?>">Foglalások</a></li>
					<li class="pt-5"><a href="<?= base_url('contacted')?>">Üzenetek</a></li>
					<li class="pt-5"><a href="<?= base_url('services/list')?>">Szolgáltatások</a></li>
					<?php if(\App\Controllers\UserAuth::GetSession()): ?>
					<li><a href="<?= base_url('logout')?>">Kilépés</a></li>
					<?php else: ?>
					<li><a href="<?= base_url('login')?>">Belépés</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>
    </header>
	

	
    

