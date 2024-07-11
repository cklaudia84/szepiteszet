<?php

namespace App\Controllers;

class Diagnostics extends BaseController
{
	public function index() :string
	{
		$data = \App\Models\TitleModel::GetDiagnosticsContent();
		
		return view('templates/begin', $data)
				.view('diagnostics')
				.view('templates/end');
	}
}
