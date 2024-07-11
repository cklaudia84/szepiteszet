<?php
namespace App\Models;

class ContactModel extends \CodeIgniter\Model
{
	protected $table = "contact";
	protected $allowedFields = ['name', 'email', 'phone', 'subject', 'message', 'date'];
}

