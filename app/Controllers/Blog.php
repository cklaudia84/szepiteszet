<?php

namespace App\Controllers;

class Blog extends BaseController
{
	public static function index(): string
	{
		$data = \App\Models\TitleModel::GetBlogContent();
		
		return view('templates/begin', $data)
				.view('blog')
				.view('templates/end');
	}
}