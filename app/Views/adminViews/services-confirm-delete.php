<br><div class="container alert alert-danger w-50">
    <center>
        <h2>Szolgáltatás törlésének megerősítése</h2>
        <p>Biztosan törölni szeretnéd a(z) <?= $service['id'] ?> azonosítójú szolgáltatást?</p>
		<p>Törlésre kerülő szolgáltatás típusa: <?= $service['name'] ?></p>
		<p>Törlésre kerülő szolgáltatás megnevezése: <?= $service['title'] ?></p>
        <a href="<?= base_url('services/delete/' . $service['id']) ?>" class="btn btn-danger">Igen, törlöm</a>
        <a href="<?= base_url('services/list') ?>" class="btn btn-secondary">Mégsem</a>
    </center>
</div>

