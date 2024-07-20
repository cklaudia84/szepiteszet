<?php
namespace App\Models;

class ContactModel extends \CodeIgniter\Model
{
	protected $table = "contacts";
	protected $allowedFields = ['name', 'email', 'phone', 'subject', 'message', 'date', 'answered'];
}