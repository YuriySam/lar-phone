<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;
use App\Models\Ophone;
use Carbon\Carbon;
use Ramsey\Uuid\Type\Integer;

class BirthdayController extends Controller
{
	
	public function __invoke()
	{
		
	//знайдемо дні народження на тиждень вперед
		
		$birthdayFrom7Days = Ophone::getBirthday7day();
		return view('admin.ophone.birthday', compact('birthdayFrom7Days'));

 
	}

	

}		
