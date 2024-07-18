<center><br><h1>Képek munkáimból</h1><br>
<div class="galery" style="width: 500px" >
	<ul>
	<li><a class="btn btn-outline-light text-dark btn-lg p-3 m-4" href="#Makeup">Smink</a></li>
	<li><a class="btn btn-outline-light text-dark btn-lg p-3 m-4" href="#Tattoo">Tetoválás</a></li>
	<li><a class="btn btn-outline-light text-dark btn-lg p-3 m-4" href="#Eyeb">Egyéb</a></li>
	</ul></div>

	<a id="Makeup"><h2>Smink</h2></a><br>

<?php
$imageMakeup = scandir('static/media/make-up/');
foreach($imageMakeup as $imgM)
{
	if($imgM !== "." && $imgM !== "..")
	{
		echo '<img class=" w-25 p-3" src="static/media/make-up/'. $imgM .'">';
	}
}
?>
<a id="Tattoo"><center><br><h2>Tetoválás</h2></center></a>
<?php
$imageTattoo = scandir('static/media/tattoo/');
foreach($imageTattoo as $imgT)
{
	if($imgT !== "." && $imgT !== "..")
	{
		echo '<img class=" w-25 p-3" src="static/media/tattoo/'. $imgT .'">';
	}
}
?>
<a id="Eyeb"><center><br><h2>Szemöldök, szempilla</h2></center></a>
<?php
$imageEyeb = scandir('static/media/eyeb/');
foreach($imageEyeb as $imgE)
{
	if($imgE !== "." && $imgE !== "..")
	{
		echo '<img class=" w-25 p-3" src="static/media/eyeb/'. $imgE .'">';
	}
}
?>
</center>