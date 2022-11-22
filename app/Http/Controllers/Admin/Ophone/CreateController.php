<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Ophone;
use App\Models\Banch;
use App\Models\Func;
use Kyslik\ColumnSortable\Sortable;

class CreateController extends Controller
{
	public function __invoke()
	{

		return view('admin.ophone.create');
	}

	}
