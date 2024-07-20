<center>
	<div class="w-25">
		<form method="GET" action="<?= base_url('contacted') ?>">
			<select name="filter" onchange="this.form.submit()">
				<option value="all" <?= ($filter == 'all') ? 'selected' : '' ?>>Összes</option>
				<option value="answered" <?= ($filter == 'answered') ? 'selected' : '' ?>>Megválaszolt</option>
				<option value="unanswered" <?= ($filter == 'unanswered') ? 'selected' : '' ?>>Megválaszolatlan</option>
			</select>
		</form>
	</div>
</center>
<br>
