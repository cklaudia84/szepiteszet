<?php
namespace App\Controllers;
use App\Models\AppointmentModel;

class Appointment extends BaseController
{
	public function index() :string
	{
		$title = \App\Models\TitleModel::GetAppointmentContent();
		$model = new AppointmentModel();
		$data['appointments'] = $model->findAll();
		
		
		$error = false;
		$inserted = false;
		$post = $this->request->getPost();	

		if($post)
		{
			$validation = \CodeIgniter\Config\Services::validation();  // Validáció példány inicializálása
			$valid = $validation->run($post, 'book');
		
			if($valid && isset($post['date']))
			{
				$dataToInsert = 
				[
					'name' => $post['name'],
					'email' => $post['email'],
					'phone' => $post['phone'],
					'service_type' => $post['service_type'],
					'service_name' => $post['service_name'],
					'date' =>$post['date'],
					'time' => $post['time'],
				];
			
			$inserted = $model->insert($dataToInsert);	
				
				if($inserted)
				{
					return view('templates/begin', $title)
					.view('appointment-success')
					.view('templates/end');	
				}
			}	
			else
			{
				$error = implode('<br>', $validation->getErrors());
			}
		}
		if(!$inserted)
		{
			$view = view('book', ['error' => $error]);
		}
		
		$data['calendar'] = $this->buildCalendar();
		
		
		
		return view('templates/begin', $title)		.'<br><center><h1>Időpontfoglalás</h1></center><br>'
			.view('appointment', $data)
			.view('templates/end');
	}
	
	public function buildCalendar(): string
	{	
		$year = isset($_GET['year']) ? intval($_GET['year']) : (int) date('Y');
		$month = isset($_GET['month']) ? intval($_GET['month']) : (int) date('n');
		
		$day = (int) date('j');
		$firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year); //időbélyeg a hónap első napjára
		$days = (int) date('t', $firstDayOfMonth);
		$lastDayOfMonth = mktime(0, 0, 0, $month, $days, $year);
		$firstWeekDay = (int) date('N', $firstDayOfMonth);
		$lastWeekDay = (int) date('N', $lastDayOfMonth);
		
		$daysName = ['Hétfő', 'Kedd', 'Szerda', 'Csütörtök', 'Péntek', 'Szombat', 'Vasárnap'];
		$monthsName = ['Január', 'Február', 'Március', 'Április', 'Május', 'Június', 'Július', 'Augusztus', 'Szeptember', 'Október', 'November', 'December'];

		$prevMonth = $month - 1; //lapozás
		$prevYear = $year;
		if ($prevMonth < 1) 
		{
			$prevMonth = 12;
			$prevYear--;
		}

		$nextMonth = $month + 1;
		$nextYear = $year;
		if ($nextMonth > 12) 
		{
			$nextMonth = 1;
			$nextYear++;
		}
		
		$calendar = '<table class="table table-bordered table-condensed container-sm w-50 text-center id="calender">';
		$calendar .= '<center><h2><a href="?month='.$prevMonth.'&year='.$prevYear.'"><i class="fa-solid fa-arrow-left"></i></a> '. $year .'. '. $monthsName[$month -1] .' <a href="?month='.$nextMonth.'&year='.$nextYear.'" ><i class="fa-solid fa-arrow-right"></i></a></h2></center><br>';
		
		$calendar .= '<tr>';
		
		//hét napjainak fejléce
		foreach($daysName as $dayn)
		{
			$calendar .= '<th class="bg-light"><h4>'. $dayn .'</h4></th>';
		}
		$calendar .= '</tr><tr>';
		
		//ha nem a hétfő a hónap első napja, cellákat ad hozzá
		for($i = 1; $i < $firstWeekDay; $i++)
		{
			$calendar .= '<td></td>';
		}
		for($i = 1; $i <= $days; $i++)
		{
			$calendar .= '<td';
			//mai nap bejelölése
			if($i == $day && $month == (int)date('n') && $year == (int)date('Y'))
			{
				$calendar .= ' class="bg-info"';
			}
			
			//hónap napjainak kiíratása
			$currentDate = strtotime("$year-$month-$i"); //vizsgált nap dátuma
			$today = strtotime(date("Y-m-d"));
			 
			if($currentDate > $today)
			{
				$calendar .= ' class="calendar-day" data-date="'.date('Y-m-d', $currentDate).'"><h4>'. $i .'</h4><a href="?day=' . $i . '&month=' . $month . '&year=' . $year . '" class="btn btn-success btn-xs">Foglalok</a></td>';
			}
		else
		{
			
				$calendar .= '><h4>'. $i .'</h4><p class="btn btn-danger btn xs">Betelt</p></td>';
		}
		
			$firstWeekDay = ($firstWeekDay % 7) + 1;
			
			if($firstWeekDay == 1)
			{
				$calendar .= '</tr><tr>';
			}
		}
		//kitölti cellákkal a végét
		if($lastWeekDay != 7)
		{
			for(; $firstWeekDay <= 7; $firstWeekDay++)
			{
				$calendar .= '<td></td>';
			}
		}
	
		$calendar .= '</tr>';
		$calendar .= '</table></div>';
		return $calendar;
	}	
	
	public function getAppointments($year, $month, $day): string
	{
		$model = new AppointmentModel();
		$appointments = $model->getAppointments($year, $month, $day);

		$output = '<ul>';
		foreach ($appointments as $appointment) 
		{
			$output .= '<li>' . $appointment['time'] . '</li>';
		}
		$output .= '</ul>';

		return $output;
	}
}
