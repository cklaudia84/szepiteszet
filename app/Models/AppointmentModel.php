<?php
namespace App\Models;
use CodeIgniter\Model;

class AppointmentModel extends Model
{
	protected $table = "appointments";
	protected $allowedFields = ['id', 'name', 'email', 'phone', 'service_type', 'service_name', 'date', 'time', 'actual_time'];
}