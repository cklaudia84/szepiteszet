<?php
namespace App\Controllers;
use App\Models\ContactModel;

Class Contacted extends BaseController
{
	public function list()
	{
		$model = new ContactModel();
		$filter = $this->request->getVar('filter');
		
		if ($filter === 'answered') 
		{
            $data['contacts'] = $model->where('answered', '1')->orderBy('date', 'DESC')->findAll();
        } 
		else if ($filter === 'unanswered') 
		{
            $data['contacts'] = $model->where('answered', NULL)->orderBy('date', 'DESC')->findAll();
        } 
		else 
		{
            $data['contacts'] = $model->orderBy('date', 'DESC')->findAll();
			$filter = 'all';
        }
		$data['filter'] = $filter;
		
		return view('templates/admin-begin')
			.'<br><center><h1>Üzenetek</h1></center><br>'	
			.view('adminViews/contacted-filter', $data)
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
			 return $this->successfulDel($model);
		}
		return redirect()->to('/contacted');
    }
	
	private function successfulDel($model)
	{
		$data['contacts'] = $model->orderBy('date', 'DESC')->findAll();
           	return view('templates/admin-begin')	
				.'<br><center><div class="alert alert-success alert-dismissible fade show w-25" role="alert">'
				. '<h3><strong>Sikeres törlés!</strong></h3>'
				. '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
				. '</div></center>'
				.'<br><center><h1>Üzenetek</h1></center><br>'		
				.view('adminViews/contacted', $data)
				.view('templates/admin-end');
	}
	public function answered($id)
    {
        $model = new ContactModel();
		$data = ['answered' => '1'];
		
        if ($model->update($id, $data)) 
        {
			return redirect()->to('/contacted');
        }
	}
	public function unanswered($id)
    {
        $model = new ContactModel();
		$data = ['answered' => NULL];
		
        if ($model->update($id, $data)) 
        {
			return redirect()->to('/contacted');
        }
	}
}

