<br><div class="container alert alert-danger w-50">
    <center>
        <h2>Üzenet törlésének megerősítése</h2>
        <p>Biztosan törölni szeretnéd a(z) <?= $contact['id'] ?> azonosítójú szolgáltatást?</p>
		<p>Törlésre kerülő üzenet küldője: <?= $contact['name'] ?></p>
		<p>Törlésre kerülő tárgy szövege: <?= $contact['subject'] ?></p>
        <a href="<?= base_url('contacted/delete/' . $contact['id']) ?>" class="btn btn-danger">Igen, törlöm</a>
        <a href="<?= base_url('contacted') ?>" class="btn btn-secondary">Mégsem</a>
    </center>
</div>
