<br><div class="container alert alert-danger w-50">
    <center>
        <h2>Üzenet törlésének megerősítése</h2>
        <p>Biztosan törölni szeretnéd az üzenetet?</p>
		<p>Törlésre kerülő üzenet küldője: <?= $contact['name'] ?></p>
		<p>Tárgy szövege: <?= $contact['subject'] ?></p>
		<p>Üzenet: <?= $contact['message'] ?></p>
        <a href="<?= base_url('contacted/delete/' . $contact['id']) ?>" class="btn btn-danger">Igen, törlöm</a>
        <a href="<?= base_url('contacted') ?>" class="btn btn-secondary">Mégsem</a>
    </center>
</div>
