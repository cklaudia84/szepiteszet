<?php
namespace App\Views;

class UserView
{
	public static function LoginForm()
	{
		helper('form');
		
		$html = form_open(base_url('login'));
		$html .= StdView::FormInput('Felhasználónév', 'user');
		$html .= StdView::FormInput('Jelszó', 'pass', 'password');
		$html .= StdView::FormButton('Belépés');
		$html .= form_close();
		
		return $html;
	}
}