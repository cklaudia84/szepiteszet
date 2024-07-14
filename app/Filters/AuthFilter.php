<?php
namespace App\Filters;

use \CodeIgniter\HTTP\RequestInterface;
use \CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements \CodeIgniter\Filters\FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		if(!\App\Controllers\UserAuth::GetSession())
			{
				return redirect()->to(base_url('login'));
			}
	}
	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){ }
}