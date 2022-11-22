<?php

namespace App\Http\Controllers\Admin\Ophone;

use App\Http\Controllers\Controller;

use App\Models\Ophone;


class DestroyController extends Controller
{


	public function __invoke(Ophone $ophone)
	{
		$ophone->delete();

		return redirect()->route('admin.ophone.index');
	}

	
}
