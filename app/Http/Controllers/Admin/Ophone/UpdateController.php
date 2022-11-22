<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Ophone;
use App\Models\Banch;
use App\Models\Func;
use Kyslik\ColumnSortable\Sortable;

class UpdateController extends Controller
{


	public function __invoke(Ophone $ophone)
	{

		$data = request()->validate([
			'number' => 'string',
			'number1' => 'string',
			'surname' => 'string',
			'name' => 'string',
			'patronymic' => 'string',
			'funid' => 'integer',
			'branid' => 'integer',
			'offid' => 'integer'
		]);
		//dd($data);
		$ophone->update($data);
		return redirect()->route('admin.ophone.show', $ophone->id);
	}

	}
