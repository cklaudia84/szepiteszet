<?php
namespace App\Controllers;

class UserAuth extends BaseController
{
	public static function GetSession()
	{
		$session = session();
		$get = $session->get('user');
		return $get;
	}
	public static function SetSession()
	{
		$session = session(); 
		$session->set('user', true);	

	}
	public static function ClearSession()
	{
		$session = session();
		$session->remove('user');
	}
	public function login()
	{
		$view = \App\Views\UserView::LoginForm();
		
		$post = $this->request->getPost();
		if($post)
		{
			$user = $post['user'];
			$pass = $post['pass'];
			if($user == 'admin' && $pass == '12345')
			{
				self::SetSession($user);
				return redirect()->to(base_url('admin'));	
			}
			else 		
			{
				$error =  '<center><div class="alert alert-danger w-25"><h3>Hibás felhasználónév vagy jelszó!</h3></div></center>';
				return view('templates/admin-begin')
					.'<br><center><h1>Bejelentkezés</h1></center><br>'
					.$error
					.$view
					.view('templates/admin-end');
			}
		}
		
		return view('templates/admin-begin')
			.'<br><center><h1>Bejelentkezés</h1></center><br>'
			.$view
			.view('templates/admin-end');
	}
	public function logout()
	{
		self::ClearSession();
		return $this->login();
	}
}
