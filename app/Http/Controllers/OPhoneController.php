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

	public function store()
	{
		

		$data = request()->validate([
			'number' =>'string',
			'number1' => 'string',
			'surname' => 'string',
			'name' => 'string',
			'patronymic' => 'string',
			'funid' => 'integer',
			'branid' => 'integer',
			'offid' => 'integer'
		]);
		//dd($data);
		Ophone::create($data);
		//return view('ophones.create');
		return redirect()->route('ophone.index');

	}
}
