<?php

namespace App\Http\Controllers\Admin\Func;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\func;

class ShowController extends Controller
{
    public function __invoke(Func $func)
    {

        return view('admin.func.show', compact('func'));
    }

    
}
