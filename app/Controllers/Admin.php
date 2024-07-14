<?php
namespace App\Controllers;
use App\Models\AppointmentModel;
use App\Models\ContactModel;

class Admin extends BaseController
{
    public function index(): string
    {
		$model = new AppointmentModel();
		$data['appointments'] = $model->orderBy('actual_time', 'DESC')->limit(5)->find();
		$model2 = new ContactModel();
		$data['contacts'] = $model2->orderBy('date', 'DESC')->limit(5)->find();
		
        return view('templates/admin-begin')
			  .view('admin', $data)
			  .view('templates/admin-end');
    }
}

