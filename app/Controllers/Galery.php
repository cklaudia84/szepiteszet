<?php

namespace App\Controllers;

class Galery extends BaseController
{
	public function index(): string
	{
		$data = \App\Models\TitleModel::GetGaleryContent();
		
		return view('templates/begin', $data)
				.view('galery')
				.view('templates/end');
	}
}
