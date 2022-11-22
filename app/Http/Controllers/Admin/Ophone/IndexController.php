<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;
use App\Models\Ophone;


class IndexController extends Controller
{
	public function __invoke()
	{
		
		//$ophones = Ophone::sortable(['Price' => 'desc'])->get();
		$ophones = Ophone::all();
		return view('admin.ophone.index', compact('ophones'));
	}

	}
