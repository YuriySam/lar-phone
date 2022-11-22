<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Ophone;
use App\Models\Banch;
use App\Models\Func;
use Kyslik\ColumnSortable\Sortable;

class ShowController extends Controller
{
	

	
	public function __invoke(Ophone $ophone)
	{

		return view('admin.ophone.show', compact('ophone'));
	}

	}
