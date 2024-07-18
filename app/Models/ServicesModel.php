<?php

namespace App\Models;

class ServicesModel extends \CodeIgniter\Model
{
	protected $table = "services";
	protected $allowedFields = ['id', 'name', 'type', 'price'];
}
