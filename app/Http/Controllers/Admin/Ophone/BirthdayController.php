<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;
use App\Models\Ophone;
use Carbon\Carbon;

class BirthdayController extends Controller
{
	public function __invoke()
	{
//знайдемо дні народження на тиждень вперед
		$ophonesBirthdayToday = Ophone::query()
		->birthDayBetween(Carbon::now(), Carbon::now()->addWeek())
		->orderByRaw("DATE_FORMAT(birthday,'%m%d')")
		->orderByRaw("DATE_FORMAT(birthday,'%y') desc")
			->orderBy('surname')
			->get();

		
		
		return view('admin.ophone.birthday', compact('ophonesBirthdayToday'));


		
	}

	
}
