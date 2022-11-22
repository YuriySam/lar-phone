<?php

namespace App\Http\Controllers\Admin\Func;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\func;

class DestroyController extends Controller
{
   
    public function __invoke(Func $func)
    {
        $func->delete();

        return redirect()->route('admin.func.index');
    }
    
   
   
    
}
