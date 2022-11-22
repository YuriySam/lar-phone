<?php

namespace App\Http\Controllers\Admin\Func;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\func;

class IndexController extends Controller
{
    public function __invoke()
    {
        $funcs = Func::all();
        return view('admin.func.index', compact('funcs'));
    }
}
