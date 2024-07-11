<?php
 
namespace App\Controllers;

class Services extends BaseController
{
	public function index(): string
	{
		$data_title = \App\Models\TitleModel::GetServicesContent();
		
		$model = model(\App\Models\ServicesModel::class);
		$data['services'] = $model->findAll();
		
		return view('templates/begin', $data_title)
				.'<br><center><h1>Jelenleg elérhető szolgáltatások</h1></center><br>'
				.view('services', $data)
				.view('templates/end');
	}
}
