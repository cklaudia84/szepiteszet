<?php

namespace app\Models;

class TitleModel
{
	public static function GetHomeContent()
	{
		return ['title' => 'Bemutatkozás'];
	}
	public static function GetServicesContent()
	{
		return ['title' => 'Szolgáltatások'];
	}
	public static function GetPricesContent()
	{
		return ['title' => 'Árlista'];
	}
	public static function GetGaleryContent()
	{
		return ['title' => 'Galéria'];
	}
	public static function GetBlogContent()
	{
		return ['title' => 'Blog'];
	}	
	public static function GetContactContent()
	{
		return ['title' => 'Kapcsolat'];
	}
	public static function GetAppointmentContent()
	{
		return ['title' => 'Foglalás'];
	}
	public static function GetDiagnosticsContent()
	{
		return ['title' => 'Bőrdiagnosztika'];
	}
}
