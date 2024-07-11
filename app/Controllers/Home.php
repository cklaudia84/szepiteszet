<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
		$data = \App\Models\TitleModel::GetHomeContent();
		
        return view('templates/begin', $data)
			  .view('home')
			  .view('templates/end');
    }
}
