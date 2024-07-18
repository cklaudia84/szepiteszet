<?php
namespace App\Controllers;
use App\Models\ServicesModel;

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
			$data = 
			[
				'id' => $id,
				'name' => $this->request->getPost('name'),
				'type' => $this->request->getPost('type'),
				'price' => $this->request->getPost('price'),
			];
			
			$update = $model->save($data);
				
			if($update)
			{ 
				$data['services'] = $model->findAll();
				return view('templates/admin-begin')
				.'<br><center><div class="alert alert-success w-25"><h3><strong>A módosítás sikerült!</strong></h3></div><br>'	
				.view('adminViews/services', $data)
				.view('templates/admin-end');
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
		$data['services'] = $model->findAll();
		$inserted = false;
		
		$post = $this->request->getPost();
		if($post)
		{
			$model = new ServicesModel();
			$inserted = $model->save($post);
			if($inserted)
			{
				$data['services'] = $model->findAll();
				
				return view('templates/admin-begin')
				.'<br><center><div class="alert alert-success w-25"><h3><strong>Az új szolgáltatás rögzítésre került!</strong></h3></div><br>'
				.view('adminViews/services-add')	
				.'<br><center><h1>Szolgáltatások</h1></center><br>'		
				.view('adminViews/services', $data)
				.view('templates/admin-end');
			}
		}
		return view('templates/admin-begin')
			.view('adminViews/services-new')	
			.view('templates/admin-end');
	}
	public function confirmDelete($id)
	{
		$model = new servicesModel();
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
			$data['services'] = $model->findAll();
           	return view('templates/admin-begin')		
			.'<br><center><div class="alert alert-success w-25"><h3><strong>Sikeres törlés!</strong></h3></div>'
			.'<br><center><h1>Szolgáltatások</h1></center><br>'	
			.view('adminViews/services-add')		
			.view('adminViews/services', $data)
			.view('templates/admin-end');
		}
		$data['services'] = $model->findAll();
		return view('templates/admin-begin')
			.'<br><center><h1>Szolgáltatások</h1></center><br>'	
			.view('adminViews/services-add')		
			.view('adminViews/services', $data)
			.view('templates/admin-end');
    }
}

