<?php

namespace App\Http\Controllers\Admin\Func;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\func;

class UpdateController extends Controller
{
   
    public function __invoke(Func $func)
    {

        $data = request()->validate([
            'func' => 'string',
            'funindex' => 'integer',
        ]);
        //dd($data);
        $func->update($data);
        return redirect()->route('admin.func.show', $func->id);
    }

    
}
