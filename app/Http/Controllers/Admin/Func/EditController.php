<?php

namespace App\Http\Controllers\Admin\Func;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\func;

class EditController extends Controller
{
    public function  __invoke(func $func)
    {

        return view('admin.func.edit', compact('func'));
    }
    
}
