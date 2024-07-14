<?php
namespace App\Controllers;
use App\Models\AppointmentModel;

Class Booked extends BaseController
{
	public function list()
	{
		$model = new AppointmentModel();
		$data['appointments'] = $model->findAll();
		
		return view('templates/admin-begin')		.'<br><center><h1>Foglalások</h1></center><br>'	
			.view('booked-add')
			.view('booked', $data)
			.view('templates/admin-end');
	}	
	
	public function edit($id)
	{	
		$model = new AppointmentModel();
		$data['appointments'] = $model->find($id);
		$update = false;
		
		$post = $this->request->getPost();
		if($post)
		{
			$update = $model->save($post);
			if($update)
			{ 
				$data = 
				[
					'id' => $id,
					'name' => $this->request->getPost('name'),
					'email' => $this->request->getPost('email'),
					'phone' => $this->request->getPost('phone'),
					'service_type' => $this->request->getPost('service_type'),
					'service_name' => $this->request->getPost('service_name'),
					'date' => $this->request->getPost('date'),
					'time' => $this->request->getPost('time')
				 ];
				$update = $model->save($post);
				$data['appointments'] = $model->findAll();
				return view('templates/admin-begin')
				.'<br><center><div class="alert alert-success w-25"><h3><strong>A módosítás sikerült!</strong></h3></div><br>'
				.view('booked', $data)
				.view('templates/admin-end');
			}
		}
		
		$data['appointments'] = $model->findAll();
		return view('templates/admin-begin')
			.view('booked-edit', $id)
			.view('templates/admin-end');
	}
	
	public function creation()
	{
		$model = new AppointmentModel();
		$data['appointment'] = $model->findAll();
		$inserted = false;
		
		$post = $this->request->getPost();
		if($post)
		{
			$model = new AppointmentModel();
			$inserted = $model->save($post);
			if($inserted)
			{
				$data['appointments'] = $model->findAll();
				
				return view('templates/admin-begin')
				.'<br><center><div class="alert alert-success w-25"><h3><strong>A foglalás rögzítésre került!</strong></h3></div><br>'
				.view('booked', $data)
				.view('templates/admin-end');
			}
		}
		
		return view('templates/admin-begin')
			.view('booked-new', $data)
			.view('templates/admin-end');
	
	}
	public function confirmDelete($id)
	{
		$model = new AppointmentModel();
		$data['appointment'] = $model->find($id);

		return view('templates/admin-begin')
			. view('confirm-delete', $data)
			. view('templates/admin-end');
	}

	public function delete($id)
    {
        $model = new AppointmentModel();

        if ($model->delete($id)) 
		{
			
			$data['appointments'] = $model->findAll();
           	return view('templates/admin-begin')		
			.'<br><center><div class="alert alert-success w-25"><h3><strong>Sikeres törlés!</strong></h3></div>'
			.'<br><center><h1>Foglalások</h1></center><br>'	
			.view('booked-add')		
			.view('booked', $data)
			.view('templates/admin-end');
		}
		$data['appointments'] = $model->findAll();
		return view('templates/admin-begin')
		.'<br><center><h1>Foglalások</h1></center><br>'	
		.view('booked-add')			
		.view('booked', $data)
		.view('templates/admin-end');
    }
}
