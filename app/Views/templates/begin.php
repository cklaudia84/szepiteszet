<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | Szépítészet</title>
    <link rel="icon" href="<?= base_url('static/media/logo.png') ?>">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="<?= base_url('static/res/style.css') ?>">
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
            <a href="<?= base_url()?>" class="">
                <img src="<?= base_url('static/media/logo.png')?>" alt="logo"></a>
            </div>

            <div class="text0">
            <h1>Szépítészet</h1>
            <q>A szépség belülről fakad, de én hozzá segíthetlek kívűlről is... </q>
            </div>

            <div class="texts">
                <div class="text">
                    <a href="<?= base_url('appointment')?>" class="action">Arckezelésre időpontot foglalok...</a>
                </div>
                <div class="text2">
                    <a href="<?= base_url('appointment')?>" class="action">Sminkre időpontot foglalok...</a>
                </div>
                <div class="text3">
                    <a href="<?= base_url('appointment')?>" class="action">Szőrtelenítésre időpontot foglalok...</a>
                </div>
                <div class="text4">
                    <a href="<?= base_url('appointment')?>" class="action">Sminktetoválásra időpontot foglalok...</a>
                </div>
            </div>

        </div>
    </header>

    <nav>
        <ul>
            <li><a href="<?= base_url()?>">Bemutatkozás</a></li>
            <li><a href="<?= base_url('services')?>">Szolgáltatások</a></li>
            <li><a href="<?= base_url('galery')?>">Galéria</a></li>
            <li><a href="<?= base_url('blog')?>">Blog</a></li>
            <li><a href="<?= base_url('contact')?>">Kapcsolat</a></li>
            <li><a href="<?= base_url('appointment')?>">Foglalás</a></li>
        </ul>
    </nav>