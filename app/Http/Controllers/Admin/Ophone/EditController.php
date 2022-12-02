<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Ophone;
use App\Models\Street;
use App\Models\Branch;
use App\Models\Func;
use Kyslik\ColumnSortable\Sortable;

class EditController extends Controller
{


	public function __invoke(Ophone $ophone)
	{
		$funcs = Func::All();
		$branches = Branch::All();
		$streets = Street::All();
		return view('admin.ophone.edit', compact('ophone', 'funcs', 'branches', 'streets'));
	}

	}
