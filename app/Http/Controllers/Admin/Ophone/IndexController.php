<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;
use App\Models\Ophone;
use App\Models\Street;


class IndexController extends Controller
{
	public function __invoke()
	{
		
		//$ophones = Ophone::sortable(['Price' => 'desc'])->get();
		$ophones = Ophone::all();
		//$streets = Street::All();
		return view('admin.ophone.index', compact('ophones'));
	}

	}
