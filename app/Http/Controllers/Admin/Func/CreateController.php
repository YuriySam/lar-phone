<?php

namespace App\Http\Controllers\Admin\Func;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\func;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.func.create');
    }


    
}
