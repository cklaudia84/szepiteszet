<?php
namespace App\Models;
use CodeIgniter\Model;

class AppointmentModel extends Model
{
	protected $table = "appointments";
	protected $allowedFields = ['name', 'email', 'phone', 'service_type', 'service_name', 'date', 'time'];
	
	public function createAppointment($data)
	{
		return $this->insert($data);
	}
}