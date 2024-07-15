<?php
namespace App\Controllers;
use App\Models\AppointmentModel;

Class Booked extends BaseController
{
	public function list()
	{
		$model = new AppointmentModel();
		$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
		
		return view('templates/admin-begin')		
			.'<br><center><h1>Foglalások</h1></center><br>'	
			.view('adminViews/booked-add')
			.view('adminViews/booked', $data)
			.view('templates/admin-end');
	}	
	
	public function edit($id)
	{	
		$model = new AppointmentModel();
		$data['appointment'] = $model->find($id);
		$update = false;
		
		$post = $this->request->getPost();
		if($post)
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
			
			$update = $model->save($data);
				
			if($update)
			{ 
				$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
				return view('templates/admin-begin')
				.'<br><center><div class="alert alert-success w-25"><h3><strong>A módosítás sikerült!</strong></h3></div><br>'	
				.view('adminViews/booked', $data)
				.view('templates/admin-end');
			}
		}
		$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
		return view('templates/admin-begin')
			.view('adminViews/booked-edit', $data)
			.view('templates/admin-end');
	}
	
	public function creation()
	{
		$model = new AppointmentModel();
		$data['appointment'] = $model->orderBy('actual_time', 'DESC')->findAll();
		$inserted = false;
		
		$post = $this->request->getPost();
		if($post)
		{
			$model = new AppointmentModel();
			$inserted = $model->save($post);
			if($inserted)
			{
				$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
				
				return view('templates/admin-begin')
				.'<br><center><div class="alert alert-success w-25"><h3><strong>A foglalás rögzítésre került!</strong></h3></div><br>'
				.view('adminViews/booked-add')	
				.'<br><center><h1>Foglalások</h1></center><br>'		
				.view('adminViews/booked', $data)
				.view('templates/admin-end');
			}
		}
		
		return view('templates/admin-begin')
			.view('adminViews/booked-new', $data)
			.view('templates/admin-end');
	}
	public function confirmDelete($id)
	{
		$model = new AppointmentModel();
		$data['appointment'] = $model->find($id);

		return view('templates/admin-begin')
			. view('adminViews/confirm-delete', $data)
			. view('templates/admin-end');
	}

	public function delete($id)
    {
        $model = new AppointmentModel();

        if ($model->delete($id)) 
		{
			$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
           	return view('templates/admin-begin')		
			.'<br><center><div class="alert alert-success w-25"><h3><strong>Sikeres törlés!</strong></h3></div>'
			.'<br><center><h1>Foglalások</h1></center><br>'	
			.view('adminViews/booked-add')		
			.view('adminViews/booked', $data)
			.view('templates/admin-end');
		}
		$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
		return view('templates/admin-begin')
		.'<br><center><h1>Foglalások</h1></center><br>'	
		.view('adminViews/booked-add')			
		.view('adminViews/booked', $data)
		.view('templates/admin-end');
    }
}
