<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ophone;

class OPhoneController extends Controller
{
	public function index()
	{
		
		$ophones = Ophone::all();
		return view('ophones.index', compact('ophones'));
	}

	public function create()
	{

		return view('ophones.create');
	}

}
