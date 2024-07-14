<?php
namespace App\Controllers;
use App\Models\ContactModel;

Class Contacted extends BaseController
{
	public function list()
	{
		$model = new ContactModel();
		$data['contacts'] = $model->findAll();
		
		return view('templates/admin-begin')
			.'<br><center><h1>Üzenetek</h1></center><br>'
			.view('contacted', $data)
			.view('templates/admin-end');
	}
	
}

