<?php
namespace App\Controllers;
use App\Models\ContactModel;

Class Contacted extends BaseController
{
	public function list()
	{
		$model = new ContactModel();
		$data['contacts'] = $model->orderBy('date', 'DESC')->findAll();
		
		return view('templates/admin-begin')
			.'<br><center><h1>Üzenetek</h1></center><br>'
			.view('adminViews/contacted', $data)
			.view('templates/admin-end');
	}
	public function confirmDelete($id)
	{
		$model = new ContactModel();
		$data['contact'] = $model->find($id);

		return view('templates/admin-begin')
			. view('adminViews/contacted-confirm-delete', $data)
			. view('templates/admin-end');
	}

	public function delete($id)
    {
        $model = new ContactModel();

        if ($model->delete($id)) 
		{
			$data['contacts'] = $model->orderBy('date', 'DESC')->findAll();
           	return view('templates/admin-begin')		
				.'<br><center><div class="alert alert-success w-25"><h3><strong>Sikeres törlés!</strong></h3></div>'
				.'<br><center><h1>Üzenetek</h1></center><br>'		
				.view('adminViews/contacted', $data)
				.view('templates/admin-end');
		}
		
		$data['contacts'] = $model->orderBy('date', 'DESC')->findAll();
		
		return view('templates/admin-begin')
			.'<br><center><h1>Üzenetek</h1></center><br>'				
			.view('adminViews/contacted', $data)
			.view('templates/admin-end');
    }
}

