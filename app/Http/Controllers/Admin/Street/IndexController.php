<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\street;

class IndexController extends Controller
{
    public function __invoke()
    {
        $streets = Street::all();
        return view('admin.street.index', compact('streets'));
    }
}
