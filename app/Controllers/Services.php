<?php
namespace App\Controllers;
use App\Models\ServicesModel;

class Services extends BaseController
{
	public function index(): string
	{
		$data_title = \App\Models\TitleModel::GetServicesContent();
		
		$model = new ServicesModel();
		$data['services'] = $model->findAll();
		
		return view('templates/begin', $data_title)
				.'<br><center><h1>Jelenleg elérhető szolgáltatások</h1></center><br>'
				.view('services', $data)
				.view('templates/end');
	}
	
	public function list()
	{
		$model = new ServicesModel();
		$data['services'] = $model->findAll();
		
		return view('templates/admin-begin')		
			.'<br><center><h1>Szolgáltatások</h1></center><br>'	
			.view('adminViews/services-add')
			.view('adminViews/services', $data)
			.view('templates/admin-end');
	}	
	public function edit($id)
	{	
		$model = new ServicesModel();
		$data['service'] = $model->find($id);
		$update = false;
		
		$post = $this->request->getPost();
		if($post)
		{
			$post['id'] = $id;
			$update = $model->save($post);
				
			if($update)
			{ 
				return $this->successfulEdit($model);
			}
		}
		
		$data['services'] = $model->findAll();
		return view('templates/admin-begin')
			.view('adminViews/services-edit', $data)
			.view('templates/admin-end');
	}
	
	public function creation()
	{
		$model = new ServicesModel();
		//$data['service'] = $model->findAll();
		$inserted = false;
		
		$post = $this->request->getPost();
		if($post)
		{
			$model = new ServicesModel();
			$inserted = $model->save($post);
			if($inserted)
			{
				return $this->successfulCreate($model);
			}
		}
		return view('templates/admin-begin')
			.view('adminViews/services-new')	
			.view('templates/admin-end');
	}
	public function confirmDelete($id)
	{
		$model = new ServicesModel();
		$data['service'] = $model->find($id);

		return view('templates/admin-begin')
			. view('adminViews/services-confirm-delete', $data)
			. view('templates/admin-end');
	}

	public function delete($id)
    {
        $model = new ServicesModel();

        if ($model->delete($id)) 
		{
			return $this->successfulDel($model);
		}
		return redirect()->to('/services/list');
    }
	private function successfulEdit($model)
	{
		$data['services'] = $model->findAll();
		
		return view('templates/admin-begin')
		. '<br><center><div class="alert alert-success alert-dismissible fade show w-25" role="alert">'
		. '<h3><strong>A módosítás sikerült!</strong></h3>'
		. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
		. '</div></center>'
		.view('adminViews/services-add')	
		.'<br><center><h1>Szolgáltatások</h1></center><br>'			
		.view('adminViews/services', $data)
		.view('templates/admin-end');
	}
	private function successfulCreate($model)
	{
		$data['services'] = $model->findAll();
				
		return view('templates/admin-begin')
			. '<br><center><div class="alert alert-success alert-dismissible fade show w-25" role="alert">'
			. '<h3><strong>Az új szolgáltatás rögzítésre került!</strong></h3>'
			. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
			. '</div></center>'
			.view('adminViews/services-add')	
			.'<br><center><h1>Szolgáltatások</h1></center><br>'		
			.view('adminViews/services', $data)
			.view('templates/admin-end');
	}
	private function successfulDel($model)
	{
		$data['services'] = $model->findAll();
		
		return view('templates/admin-begin')		
			.'<br><center><div class="alert alert-success alert-dismissible fade show w-25" role="alert">'
			. '<h3><strong>Sikeres törlés!</strong></h3>'
			. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
			. '</div></center>'
			.'<br><center><h1>Szolgáltatások</h1></center><br>'	
			.view('adminViews/services-add')		
			.view('adminViews/services', $data)
			.view('templates/admin-end');
	}
}

