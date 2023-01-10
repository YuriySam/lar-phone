<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Street;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $streets = Street::all();
        $streets = Street::orderBy('street')->orderBy('house', 'asc')->get();
        // ->groupBy('season')->orderBy('season', 'DESK')->orderBy('number', 'DESK')->get();
        return view('admin.street.index', compact('streets'));
    }
}
