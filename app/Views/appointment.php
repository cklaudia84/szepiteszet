<div id="calendarContainer">
	<?php
	if (!isset($_GET['day']) && !isset($_GET['month']) && !isset($_GET['year'])) 
	{
		echo "<center><h4>Jelenleg nincs kiválasztott nap. Kérlek válassz a naptárban elérhető napok közül!</h4></center><br>";
		echo $calendar;
	} 
	else if (isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) 
	{
		$selectedDay = $_GET['day'];
		$selectedMonth = $_GET['month'];
		$selectedYear = $_GET['year'];
		$date = sprintf('%04d-%02d-%02d', $selectedYear, $selectedMonth, $selectedDay);
		
		echo '<br><center><h3>Választott nap: ' . $date . '</h3><br><h4>A kiválasztott nap módosí­tásához kattints ide: <button type="button" class="btn btn-outline-light btn-lg"><a href="' . base_url("appointment") . '" class="action">Vissza a naptárhoz</a></button></h4><br><h4>Kérlek töltsd ki az alábbi űrlapot az időpontfoglalás folytatásához:</h4></center>';

		echo view('book');
	} 
	else 
	{
		echo $calendar;
	}
	?>
</div>
