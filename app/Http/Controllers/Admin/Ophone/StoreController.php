<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Ophone;
use App\Models\Banch;
use App\Models\Func;
use Kyslik\ColumnSortable\Sortable;

class StoreController extends Controller
{
	public function __invoke()
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
		return redirect()->route('admin.ophone.index');

	}

	}
