<br><div class="container alert alert-danger w-50">
    <center>
        <h2>Foglalás törlésének megerősítése</h2>
        <p>Biztosan törölni szeretnéd a(z) <?= $appointment['id'] ?> azonosítójú foglalást?</p>
		<p>Törlésre kerülő név: <?= $appointment['name'] ?></p>
		<p>Törlésre kerülő dátum: <?= $appointment['date'] ?>, idő: <?= $appointment['time'] ?></p>
        <a href="<?= base_url('booked/delete/' . $appointment['id']) ?>" class="btn btn-danger">Igen, törlöm</a>
        <a href="<?= base_url('booked') ?>" class="btn btn-secondary">Mégsem</a>
    </center>
</div>
