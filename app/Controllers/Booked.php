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
			$post['id'] = $id;
			$update = $model->save($post);
				
			if($update)
			{ 
				return $this->successfulEdit($model);
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
				return $this->successfulCreate($model);
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
			return $this->successfulDel($model);
		}
		return redirect()->to('/booked');
    }
	
	private function successfulDel($model)
	{
			$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
           	return view('templates/admin-begin')		
				.'<br><center><div class="alert alert-success alert-dismissible fade show w-25" role="alert">'
				. '<h3><strong>Sikeres törlés!</strong></h3>'
				. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
				. '</div></center>'
				.'<br><center><h1>Foglalások</h1></center><br>'	
				.view('adminViews/booked-add')		
				.view('adminViews/booked', $data)
				.view('templates/admin-end');
	}
	private function successfulCreate($model)
	{
		$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
				
		return view('templates/admin-begin')
			. '<br><center><div class="alert alert-success alert-dismissible fade show w-25" role="alert">'
			. '<h3><strong>A foglalás rögzítésre került!</strong></h3>'
			. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
			. '</div></center>'
			.view('adminViews/booked-add')	
			.'<br><center><h1>Foglalások</h1></center><br>'		
			.view('adminViews/booked', $data)
			.view('templates/admin-end');
	}
	private function successfulEdit($model)
	{
		$data['appointments'] = $model->orderBy('actual_time', 'DESC')->findAll();
		return view('templates/admin-begin')
			. '<br><center><div class="alert alert-success alert-dismissible fade show w-25" role="alert">'
			. '<h3><strong>A módosítás sikerült!</strong></h3>'
			. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
			. '</div></center>'	
			.'<br><center><h1>Foglalások</h1></center><br>'	
			.view('adminViews/booked-add')		
			.view('adminViews/booked', $data)
			.view('templates/admin-end');
	}
}
