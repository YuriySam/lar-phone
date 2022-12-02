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


		//dd($ophone);
		$data = request()->validate([
			'number' => 'string',
			'number1' => 'string',
			'surname' => 'string',
			'name' => 'string',
			'patronymic' => 'string',
			'func_id' => 'integer',
			'branch_id' => 'integer',
			'offid' => 'integer',
			'strid' => 'integer',
			'house' => 'string',
			'flat' => 'string',
			'userMail' => 'email|nullable',

		]);
		//dd($data);
		$ophone->update($data);
		return redirect()->route('admin.ophone.show', $ophone->id);
	}

	}
