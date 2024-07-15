<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index(): string
	{
		$data = \App\Models\TitleModel::GetContactContent();
		
		$view_begin = view('templates/begin', $data);
        $view_content = '';
		
        $error = false;
		$inserted = false;
		$post = $this->request->getPost();
	
		if($post)
		{
			$validation = \CodeIgniter\Config\Services::validation();  // Validáció példány inicializálása
			$valid = $validation->run($post, 'contact');
		
			if($valid)
			{
				$model = model(\App\Models\ContactModel::class);
				$inserted = $model->save($post);
				if($inserted)
				{
					$view_content .= view('contact-success');
				}
			}	
			else
				{
					$error = implode('<br>', $validation->getErrors());  // Hibaüzenetek lekérése
				}
		}
		if(!$inserted)
		{
			$view_content .= view('contact', ['error' => $error]);
		}
	
        $view_end = view('templates/end');

			return $view_begin
				.$view_content 
				.$view_end;
	}
}